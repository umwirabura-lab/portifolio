var tablinks = document.getElementsByClassName("tab-links");
var tabcontents = document.getElementsByClassName("tab-contents");

var submit = document.getElementById("sub-mit");

function opentab(tabname){

 
    for(tablink of tablinks){
        tablink.classList.remove("active-link")
    }
    for(tabcontent of tabcontents){
        tabcontent.classList.remove("active-tab")
    }
    // if (event.currentTarget) { // Check if event.currentTarget is not null
    //     event.currentTarget.classList.add("active-link");
    //   }
    event.currentTarget.classList.add("active-link")
    document.getElementById(tabname).classList.add("active-tab")
}
// ----------------------------------contact-----------------------
 const form = document.querySelector("form");
 const Username = document.getElementById("username");
 const email = document.getElementById("email");
 const message = document.getElementById("message");

 function sendEmail (){

  const bodyMessage = `
  Full Name: ${Username.value}<br>
  Email: ${email.value}<br>
  Message: ${message.value}
`;
  Email.send({
    Host : "smtp.elasticemail.com",
    Username : "semana.coder.expert@gmail.com",
    Password : "D6F5E3A4A93F840BF5D6817C9E62EDD9705B",
    To : 'semana.coder.expert@gmail.com',
    From : "semana.coder.expert@gmail.com",
    Subject: "New message from contact form",
    Body : bodyMessage
}).then(response => {
  if (response === "OK") {
    Swal.fire({
      title: "Good job!",
      text: "Thanks for getting in touch! We’ll review your submission shortly!",
      icon: "success"
    });
  }
});

 }


 form.addEventListener("submit" , (e) => {
  e.preventDefault();

  sendEmail();
 })
