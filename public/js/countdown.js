var hariEl = document.getElementById("hari");
var jamEl = document.getElementById("jam");
var menitEl = document.getElementById("menit");
var detikEl = document.getElementById("detik");

function countdownTimer() {
    const countdownDate = new Date("09/08/2023").getTime();

    // console.log(countdownDate);

    const detik = 1000;
    const menit = detik * 60;
    const jam = menit * 60;
    const hari = jam * 24;

    const interval = setInterval(() => {
        const now = new Date().getTime();
        const distance = countdownDate - now;

        console.log(Math.floor(distance / hari));
        hariEl.innerText = formatNumber(Math.floor(distance / hari));
        jamEl.innerText = formatNumber(Math.floor((distance % hari) / jam));
        menitEl.innerText = formatNumber(Math.floor((distance % jam) / menit));
        detikEl.innerText = formatNumber(
            Math.floor((distance % menit) / detik)
        );
    }, 1000);
}

function formatNumber(number) {
    if (number < 10) {
        return "0" + number;
    }
    return number;
}

countdownTimer();
