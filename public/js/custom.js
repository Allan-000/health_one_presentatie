let pass=document.querySelector('.custom-password');
let passLength=pass.textContent.length;

pass.textContent='*'.repeat(passLength);
console.log(pass.textContent)