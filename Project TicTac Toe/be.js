const kotak = document.querySelectorAll(".kotak");
const statusBermain = document.querySelector("#statusGame");
const tombolUlang = document.querySelector("#restartButton");
const kondisiMenang = [
    [0,1,2],
    [3,4,5],
    [6,7,8],
    [0,3,6],
    [1,4,7],
    [2,5,8],
    [2,4,6]
];
let opsi = ["","","","","","","","",""];
let pemain1 = "X";
let berjalan = false;

inisialisasiGame();

function inisialisasiGame(){
    kotak.forEach(kotak => kotak.addEventListener("click", kotakTerpilih))
    tombolUlang.addEventListener("click", restartGame);
    statusBermain.textContent = `giliran ${pemain1}`;
    berjalan = true;
}

function kotakTerpilih(){
    const indexKotak = this.getAttribute("indexKotak");
    if(opsi[indexKotak] != "" || !berjalan)
    {
        return;
    }
    updateKotak(this, indexKotak);
    inisialisasiPemenang();
}

function updateKotak(kotak, index){
    opsi[index] = pemain1;
    kotak.textContent = pemain1;
}

function gantiPemain(){
    pemain1 = (pemain1 == 'X') ? "0" : "X";
    statusBermain.textContent = `giliran ${pemain1}`;
}

function inisialisasiPemenang(){
    let rondeMenang = false;
    for(let i = 0; i < kondisiMenang.length; i++)
    {
        const kondisi = kondisiMenang[i];
        const kotakA = opsi[kondisi[0]];
        const kotakB = opsi[kondisi[1]];
        const kotakC = opsi[kondisi[2]];
        if(kotakA == "" || kotakB == "" || kotakC == "")
        {
            continue;
        }
        if(kotakA == kotakB && kotakB == kotakC)
        {
            rondeMenang = true;
            break;
        }
    }
    if(rondeMenang){
        statusBermain.textContent = `${pemain1} menang!`;
        berjalan = false;
    }
    else if(!opsi.includes("")){
        statusBermain.textContent = `Tie`;
        berjalan = false;
    }
    else
    {
        gantiPemain();
    }
}

function restartGame(){
    pemain1 = "X";
    opsi = ["","","","","","","","",""];
    kotak.forEach(kotak => kotak.textContent = "");
    statusBermain.textContent = `giliran ${pemain1}`;
    berjalan = true;
}