let skorPemain = 0;
let skorKomputer = 0;
const skorPemain_span = document.getElementById("skor-pemain");
const skorKomputer_span = document.getElementById("skor-komputer");
const papanSkor_div = document.querySelector(".papan-skor");
const hasil_p = document.querySelector(".hasil > p");
const pilBatu = document.getElementById("b"); // batu
const pilKertas = document.getElementById("k"); // kertas
const pilGunting = document.getElementById("g"); // gunting

function getPilihanKomputer()
{
    const opsi = ['b','k','g'];
    const angkaAcak = Math.floor(Math.random() * 3);
    return opsi[angkaAcak];
}

function ubahTeks(kata){
    if (kata === "b") return "Batu";
    if (kata === "k") return "Kertas";
    return "Gunting";
}

function win(pemain, komputer){
    skorPemain++;
    skorPemain_span.innerHTML = skorPemain;
    skorKomputer_span.innerHTML = skorKomputer;
    hasil_p.innerHTML = `${ubahTeks(pemain)} mengalahkan ${ubahTeks(komputer)}. Kamu menang!`;
}

function lose(pemain, komputer){
    skorKomputer++;
    skorPemain_span.innerHTML = skorPemain;
    skorKomputer_span.innerHTML = skorKomputer;
    hasil_p.innerHTML = `${ubahTeks(pemain)} dikalahkan oleh ${ubahTeks(komputer)}. Kamu kalah!`;
}

function draw(pemain, komputer){
    hasil_p.innerHTML = `${ubahTeks(pemain)} dengan ${ubahTeks(komputer)} adalah imbang!`;
}

function fokusGame(pilPemain){
    const pilKomputer = getPilihanKomputer();
    switch(pilPemain + pilKomputer){
        case "bg":
        case "kb":
        case "gk":
            win(pilPemain, pilKomputer);
            break;
        case "gb":
        case "bk":
        case "kg":
            lose(pilPemain, pilKomputer);
            break;
        case "gg":
        case "bb":
        case "kk":
            draw(pilPemain, pilKomputer);
            break;
    }
}

function main(){
    pilBatu.addEventListener('click' , () => fokusGame("b"));
    pilKertas.addEventListener('click' , () => fokusGame("k"));
    pilGunting.addEventListener('click' , () => fokusGame("g")); 
}

main();
