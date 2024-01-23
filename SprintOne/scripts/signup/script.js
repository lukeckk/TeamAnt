const form = document.querySelector('form');
const name = document.getElementById('name');
const email = document.getElementById('email');
const cnumber = document.getElementById('Cnumber');

let validated = true;
  let counter;


form.addEventListener('submit', event => {
  event.preventDefault();




     if(validateInputs() && validateToppings())
     {
           signup.submit();
     }
});

const setError = (element, message) => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector('.error');

  errorDisplay.innerText = message;
  inputControl.classList.add('error');
  inputControl.classList.remove('success');
};



const setSuccess = element => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector('.error');

  errorDisplay.innerText = '';
  inputControl.classList.add('success');
  inputControl.classList.remove('error');
};


const validateInputs = () => {
  const namevalue = name.value.trim();
  const emailvalue = email.value.trim();
  const cnumbervalue = cnumber.value.trim();

 if(namevalue === '') {
    setError(name, "Name is required");
    validated = false;
    counter++;

  }
    else {
      setSuccess(name);


    }

 if (emailvalue === '') {
     setError(email, "Email is required");
     validated = false;
   }
     else if (!emailvalue.toLowerCase().includes("@greenriver.edu")){
       alert("Use a @greenriver.edu email");
       setSuccess(email);

     }
   else {
     setSuccess(email);

   }

 if (cnumbervalue === '') {
     setError(cnumber, "Cohort Number is Required");
     validated = false;
   }
   else if (isNaN(cnumbervalue)){
       setError(cnumber, 'Cohort number must be a number');
     validated = false;
   }
   else if (cnumbervalue>100 && cnumbervalue<0) {
       setError(cnumber, 'Cohort number must be b/w 0 & 100');
     validated = false;
     }
   else {
       setSuccess(cnumber);

     }
     }
