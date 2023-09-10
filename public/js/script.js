var nameError = document.getElementById('name-error');
var submitError = document.getElementById('submit-error');


function validateName(){

    var name = document.getElementById('name').value;
    if(name.length == 0){
        nameError.innerHTML ="NAME IS REQUIERED";
        return false;
    }
    if(!name.match( /^[A-Za-z]*\*\s{1}[A-Za-z]*$/)){
        nameError.innerHTML = "Write full name";
        return false;
    }

    nameError.innerHTML = 'VALID';
    return true;
    
}
// const firstName = document.getElementById('validationCustom01')
// const lastName = document.getElementById('validationCustom02')
// const uname = document.getElementById('validationCustomUsername')
// const city = document.getElementById('validationCustom03')
// const state = document.getElementById('validationCustom04')
// const Zippeu = document.getElemebtById('validationCustom05')
// const form = document.getElementById('form')
// const errorElement = document.getElementById('error')

// form.addEventListener('submit', (e) => {
//     let messages= []
//     if (firstName.value === '' || firstName.value ==null){
//         messages.push('tolong isi namanya')
//     }

//     if(messages.length > 0){
//         e.preventDefault()
//         errorElement.innetText = messages.join(', ')
//         }
//     // if (lastName.value === '' || lastName.value ==null){
//     //     messages.push('tolong isi namanya');
//     // }
//     // var regex = /[0-9]|\./;
//     // if(Zippeu.value =! regex){
//     //     messages.push('tolong isi angka');
//     // }
//     //e.stopPropagation()
// })



// (function () {
//     'use strict'
  
//     // Fetch all the forms we want to apply custom Bootstrap validation styles to
//     var forms = document.querySelectorAll('.needs-validation')
  
//     // Loop over them and prevent submission
//     Array.prototype.slice.call(forms)
//       .forEach(function (form) {
//         form.addEventListener('submit', function (event) {
//           if (!form.checkValidity()) {
//             event.preventDefault()
//             event.stopPropagation()
//           }
  
//           form.classList.add('was-validated')
//         }, false)
//       })

//   })()