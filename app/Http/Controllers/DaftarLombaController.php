<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\tim;
use App\Models\user_berkas;
use App\Models\Pendaftar;
use App\Models\subkategorilombaweb;
use App\Models\pengaturan;

use Storage;
use Auth;
use DB;
use Crypt;

class DaftarLombaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = DB::table('v_tim_lomba')->where('id_user', Auth::user()->id_user)->get();
        $pengaturan = pengaturan::where('id_pengaturan', 1)->first();
        return view('components.pesertaPage.daftarlomba', compact('datas','pengaturan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $lomba;
        if ($request->kategorilomba == 1) {
            $lomba = "WebProgramming";
        } elseif ($request->kategorilomba == 2) {
            $lomba = "DesignPackaging";
        } elseif ($request->kategorilomba == 3) {
            $lomba = "Videografi";
        } elseif ($request->kategorilomba == 4) {
            $lomba = "Poster";
        } else {

            $lomba = "Unknown";
        }
        $public_directory = $request->asal_sekolah . "_" . $lomba . "_" . $request->nama_tim . "_" . Auth::user()->name;
        $storage = Storage::disk('data_pendaftar');
        //store nama tim
        $tim = tim::create([
            'Nama_tim' => $request->nama_tim,
            'guru_pembimbing' => $request->guru_pembimbing,
            'asal_sekolah' => $request->asal_sekolah,
            'NoHp' => $request->NoHp_peserta,
        ]);
        //store nama anggota dan email
        $jumlah_peserta = count($request->nama_peserta);
        for ($i = 0; $i <= $jumlah_peserta; $i++) {

            if (isset($request->nama_peserta) && isset($request->nama_peserta[$i])) {
                $cek = User::where('name', $request->nama_peserta[$i])->where('email', $request->email_peserta[$i])->get();
                if ($request->nama_peserta[$i] && $request->email_peserta) {
                    if ($cek->count() < 1) {
                        $user = User::Create([
                            'name' => $request->nama_peserta[$i],
                            'email' => $request->email_peserta[$i],
                            'id_tim' => $tim->id_tim,
                        ]);
                    } else {
                        $user = User::find($cek->first()->id_user);
                        $user->update(['id_tim' => $tim->id_tim]);
                    }
                    // dd($request->nama_peserta[$i]);

                    //buat nama file
                    $Filekartu_pelajar = "";
                    $Filefoto_formal = "";
                    $Filefollow_ig_epim = "";
                    $Filefollow_ig_hmjti = "";
                    $Filesubscribe = "";
                    $Filefollow_tiktok = "";

                    // dd()
                    if (isset($request->kartu_pelajar) && isset($request->kartu_pelajar[$i])) {
                        if ($request->kartu_pelajar[$i]->isValid()) {
                            $Filekartu_pelajar = $request->nama_peserta[$i] . '_kartuPelajar.' . $request->kartu_pelajar[$i]->extension();
                        }
                    } else {
                        $Filekartu_pelajar = null;
                    }

                    if (isset($request->foto_formal) && isset($request->foto_formal[$i])) {
                        if ($request->foto_formal[$i]->isValid()) {
                            $Filefoto_formal = $request->nama_peserta[$i] . '_FotoFormal.' . $request->foto_formal[$i]->extension();
                        }
                    } else {
                        $Filefoto_formal = null;
                    }

                    if (isset($request->bukti_follow_ig_epim) && isset($request->bukti_follow_ig_epim[$i])) {
                        if ($request->bukti_follow_ig_epim[$i]->isValid()) {
                            $Filefollow_ig_epim = $request->nama_peserta[$i] . '_buktiIgEpim.' . $request->bukti_follow_ig_epim[$i]->extension();
                        }
                    } else {
                        $Filefollow_ig_epim = null;
                    }

                    if (isset($request->bukti_follow_ig_hmjti) && isset($request->bukti_follow_ig_hmjti[$i])) {
                        if ($request->bukti_follow_ig_hmjti[$i]->isValid()) {
                            $Filefollow_ig_hmjti = $request->nama_peserta[$i] . '_buktiIgHmjti.' . $request->bukti_follow_ig_hmjti[$i]->extension();
                        }
                    } else {
                        $Filefollow_ig_hmjti = null;
                    }

                    if (isset($request->bukti_subscribe_hmjti) && isset($request->bukti_subscribe_hmjti[$i])) {
                        if ($request->bukti_subscribe_hmjti[$i]->isValid()) {
                            $Filesubscribe = $request->nama_peserta[$i] . '_subscribe.' . $request->bukti_subscribe_hmjti[$i]->extension();
                        }
                    } else {
                        $Filesubscribe = null;
                    }

                    if (isset($request->bukti_follow_tiktok_hmjti) && isset($request->bukti_follow_tiktok_hmjti[$i])) {
                        if ($request->bukti_follow_tiktok_hmjti[$i]->isValid()) {
                            $Filefollow_tiktok = $request->nama_peserta[$i] . '_buktiTiktok.' . $request->bukti_follow_tiktok_hmjti[$i]->extension();
                        }
                    } else {
                        $Filefollow_tiktok = null;
                    }

                    $userberkas = user_berkas::create([
                        'id_user' => $user->id_user,
                        'id_tim' => $user->id_tim,
                        'kartu_pelajar' => $Filekartu_pelajar ? $storage->putFileAs($public_directory . '/berkas_peserta' . '/' . $request->nama_peserta[$i], $request->kartu_pelajar[$i], $Filekartu_pelajar) : null, // Use null for missing data
                        'foto_formal' => $Filefoto_formal ? $storage->putFileAs($public_directory . '/berkas_peserta' . '/' . $request->nama_peserta[$i], $request->foto_formal[$i], $Filefoto_formal) : null,
                        'follow_ig_epim' => $Filefollow_ig_epim ? $storage->putFileAs($public_directory . '/berkas_peserta' . '/' . $request->nama_peserta[$i], $request->bukti_follow_ig_epim[$i], $Filefollow_ig_epim) : null,
                        'follow_ig_hmj' => $Filefollow_ig_hmjti ? $storage->putFileAs($public_directory . '/berkas_peserta' . '/' . $request->nama_peserta[$i], $request->bukti_follow_ig_hmjti[$i], $Filefollow_ig_hmjti) : null,
                        'follow_tiktok' => $Filefollow_tiktok ? $storage->putFileAs($public_directory . '/berkas_peserta' . '/' . $request->nama_peserta[$i], $request->bukti_follow_tiktok_hmjti[$i], $Filefollow_tiktok) : null, // Typo fixed (Filesubscribe -> Filefollow_tiktok)
                        'subscribe' => $Filesubscribe ? $storage->putFileAs($public_directory . '/berkas_peserta' . '/' . $request->nama_peserta[$i], $request->bukti_subscribe_hmjti[$i], $Filesubscribe) : null, // Typo fixed (subscribe -> Filesubscribe)
                    ]);
                }
            }
        }

        $Fileuploadbayar = null;
        if (isset($request->upload_bayar)) {
            if ($request->upload_bayar->isValid()) {
                $Fileuploadbayar = $request->nama_peserta[0] . '_buktiPembayaran.' . $request->upload_bayar->extension();
            }
        } else {
            $Fileuploadbayar = null;
        }
        //store pendaftaran
        $pendaftaran = Pendaftar::create([
            'id_lomba' => $request->kategorilomba,
            'id_tim' => $tim->id_tim,
            'id_user' => Auth::user()->id_user,
            'id_user' => Auth::user()->id_user,
            'upload_bayar' => $Fileuploadbayar ? $storage->putFileAs($public_directory . '/buktipembayaran' . '/' . Auth::user()->name, $request->upload_bayar, $Fileuploadbayar) : null,
        ]);

        toastr()->success('Data Berhasil Di Simpan', 'Berhasil');
        if ($request->kategorilomba == 1) {
            $whatsappUrl = 'https://chat.whatsapp.com/BWhqTp0MWgZCjwvGhJrWJG'; // WhatsApp Web group chat URL
        } elseif ($request->kategorilomba == 2) {
            $whatsappUrl = 'https://chat.whatsapp.com/FAfOKKmmILw5tDxVysVuj6    '; // WhatsApp design group chat URL
        } elseif ($request->kategorilomba == 3) {
            $whatsappUrl = 'https://chat.whatsapp.com/Byn4sbY4pmv1cE01iEf26Z'; // WhatsApp design group chat URL
        } elseif ($request->kategorilomba == 4) {
            $whatsappUrl = 'https://chat.whatsapp.com/Jfat1UhtZPv58XkvfLWKHH'; // WhatsApp design group chat URL
        }

        return redirect()->route('Lomba.peserta.page')->with('whatsapp_url', $whatsappUrl);

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    public function tambahproposal(Request $request, $id)
    {
        // dd($request);
        $lomba = DB::table('v_tim_lomba')->first();
        $namalomba;
        if ($lomba->id_lomba == 1) {
            $namalomba = "WebProgramming";
        } elseif ($lomba->id_lomba == 2) {
            $namalomba = "DesignPackaging";
        } elseif ($lomba->id_lomba == 3) {
            $namalomba = "Videografi";
        } elseif ($lomba->id_lomba == 4) {
            $namalomba = "Poster";
        } else {
            $namalomba = "Unknown";
        }
        $storage = Storage::disk('data_pendaftar');
        $public_directory = $lomba->asal_sekolah . "_" . $namalomba . "_" . $lomba->nama_tim . "_" . Auth::user()->name;

        if ($request->hasFile('proposal')) {
            $uploadedFile = $request->file('proposal');
            $filename = $namalomba. '_Proposal_'. $lomba->nama_ketua. '_'. $lomba->nama_tim. '.'. $uploadedFile->getClientOriginalExtension();
            if ($storage->exists($public_directory. '/proposal/'. $filename)) {
                Storage::delete($filename);
            }
            $path = $storage->putFileAs($public_directory. '/proposal', $uploadedFile, $filename);
            $data = Pendaftar::where('id_user', $id);
            $data->update([
                'proposal' => $path
            ]);
        } elseif ($request->hasFile('upload_bukti_submit_ig')) {
            $uploadedFile = $request->file('upload_bukti_submit_ig');
            $filename = $namalomba. '_BuktiUploadIG_'. $lomba->nama_ketua. '_'. $lomba->nama_tim. '.png';
            if ($storage->exists($public_directory. '/BuktiUploadIG/'. $filename)) {
                Storage::delete($filename);
            }
            $path = $storage->putFileAs($public_directory. '/BuktiUploadIG', $uploadedFile, $filename);
            $data = Pendaftar::where('id_user', $id);
            $data->update([
                'status_lolos' => 0,
                'proposal' => $request->linkvideo,
                'upload_bukti_submit_ig' => $path,
            ]);
        } else {
            // Handle the case where no file is uploaded
            toastr()->error('No file uploaded', 'Error');
            return redirect()->back();
        }
    
        toastr()->success('Data Berhasil Di Simpan', 'Berhasil');
        return redirect()->back();
    }

    public function uploadbuktibayar(Request $request, $id)
    {
        $lomba = DB::table('v_tim_lomba')->first();
        // File Upload Handling

        $namalomba;
        if ($lomba->id_lomba == 1) {
            $namalomba = "WebProgramming";
        } elseif ($lomba->id_lomba == 2) {
            $namalomba = "DesignPackaging";
        } elseif ($lomba->id_lomba == 3) {
            $namalomba = "Videografi";
        } elseif ($lomba->id_lomba == 4) {
            $namalomba = "Posterkaryailmiah";
        } else {
            $namalomba = "Unknown";
        }
            $uploadedFile = $request->file('bukti_bayar');
            // Generate a unique filename with extension
            $filename = $namalomba . '_Bukti_Pembayaran_' . $lomba->nama_ketua . '_' . $lomba->nama_tim . '.png';
            // Storage Configuration (replace with your actual disk name)
            $storage = Storage::disk('data_pendaftar');
            $public_directory = $lomba->asal_sekolah . "_" . $namalomba . "_" . $lomba->nama_tim . "_" . Auth::user()->name;
            // Store uploaded file in the designated location
            if ($storage->exists($public_directory . '/bukti_pembayaran/' . $filename)) {
                // dd("terdapat file");
                Storage::delete($filename);
            }
            $path = $storage->putFileAs($public_directory . '/bukti_pembayaran', $uploadedFile, $filename);
            $data = Pendaftar::where('id_user', $id);
            $data->update([
                'upload_bayar' => $path
            ]);

        toastr()->success('Data Berhasil Di Simpan', 'Berhasil');
        return redirect()->back();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $data = DB::table('v_tim_lomba')->where('id_pendaftar', $id)->first();
        $datapeserta = DB::table('v_datapeserta')->where('id_tim', $data->id_tim)->get();
        $pengaturan = pengaturan::where('id_pengaturan', 1)->first();
        if (Auth::user()->id_user == $data->id_user) {
            return view('components.pesertaPage.editdaftarlomba', compact('data', 'datapeserta', 'pengaturan'));
        } else {
            abort(404);
        }
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = Crypt::decrypt($id);
        $datapendaftaran = Pendaftar::where('id_pendaftar', $id)->first();
        $viewdatapendaftaran = DB::table('v_tim_lomba')->where('id_user', Auth::user()->id_user)->first();

        $idketua = $datapendaftaran->id_user;
        // dd($idketua);
        $idtim = $datapendaftaran->id_tim;
        $dataketua = User::where('id_user', $idketua);
        $dataketua->update(['id_tim' => null]);
        $lomba;
        if ($datapendaftaran->id_lomba == 1) {
            $lomba = "WebProgramming";
        } else {
            $lomba = "DesignPackaging";
        }
        $storage = Storage::disk('data_pendaftar');
        $public_directory = $viewdatapendaftaran->asal_sekolah . "_" . $lomba . "_" . $viewdatapendaftaran->nama_tim . "_" . $viewdatapendaftaran->nama_ketua;
        if ($storage->exists($public_directory)) {
            $storage->deleteDirectory($public_directory);
        }
        $datatim = tim::where('id_tim', $idtim);
        $datatim->delete();

        toastr()->success('Data Berhasil Di Hapus', 'Berhasil');
        return redirect()->back();
    }
}
