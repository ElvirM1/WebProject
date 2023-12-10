// Krijimi i nje koleksioni te elementeve te klases "patientReview"
let slide = document.querySelectorAll(".patientReview");
let card = document.querySelectorAll(".card");
let closeBtn = document.getElementById("closeBtn");
let connectBtn = document.getElementById("connectBtn");


let count = 0;

// Vendosja e seciles slide ne nje pozite bazuar ne indeks
slide.forEach(function(slides, index){
   slides.style.left=`${index * 100}%`
})

// Funksioni qe leviz slides ne anen tjeter pas nje intervali
function myFun(){
   slide.forEach(function(curVal){
       curVal.style.transform=`translateX(-${count * 100}%)`
   })
}

// Perdorimi i setInterval per te automatizuar ndryshimin e slides pas nje periudhe kohore
setInterval(function(){
   count++;
   if(count == slide.length){
       count=0;
   }
   myFun()
}, 2000)

card.forEach(function(cards){
   cards.addEventListener("click", function(){
       // Krijimi i nje funksioni per krijimin e kartave
       function createDoctorCard(name, role, description) {
           document.querySelector(".detail").style.display="block"
           document.querySelector(".content").innerHTML=`
           <img src=${cards.firstElementChild.src} alt="">
           <div class="contentText">
                       <h1>${name}</h1>
                       <p>${role} ${description}</p>
           </div>
           `
           // Shtimi i event listenerit per butonin e mbylljes
           closeBtn.addEventListener("click", function(){
               document.querySelector(".detail").style.display="none"
           })
       }

       // Perdorimi i funksionit per krijimin e kartes se Emmes
       if (cards.id === "emmaCard") {
           createDoctorCard("Emma", "In her role, Emma is a physician dedicated to the health of our community,", "providing ongoing care and support for patients.");
       }
       // Perdorimi i funksionit per krijimin e kartes se Sophias
       else if (cards.id === "sophiaCard") {
           createDoctorCard("Sophia", "In her role, Sophia is a dedicated physician with a focus on advanced medical practices,", "ensuring personalized and effective treatment for patients.");
       }
       // Perdorimi i funksionit per krijimin e kartes se Benjamins
       else if (cards.id === "benjaminCard") {
           createDoctorCard("Benjamin", "As a healthcare professional, Benjamin combines medical expertise with compassion and care to", "address the comprehensive needs of patients.");
       }
   })
})


connectBtn.addEventListener("click", function(){
   let email = document.getElementById("email");
   let pass = document.getElementById("pass");

    // Validimi i formes
   if(email.value == "" && pass.value == ""){
       alert("Enter Details")
   }else{
       alert("You Logged IN")
   }
})


