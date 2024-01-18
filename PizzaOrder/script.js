const form = document.getElementById('form');
const ordername = document.getElementById('orderName');
const email = document.getElementById('email');
const pnumber = document.getElementById('pnumber');
const city = document.getElementById('addressCity');
const state = document.getElementById('addressState');




   form.addEventListener('submit', event => {
  event.preventDefault();
     
     validateToppings();
    validateInputs();
    

     if(validateInputs() && validateToppings())
     {
           pizzaOrder.submit();
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
  const namevalue = ordername.value.trim();
  const emailvalue = email.value.trim();
  const pnumbervalue = pnumber.value.trim();
  let statevalue = state.value.trim();
  const cityvalue = city.value.trim();
  
  let validated = true;
  let counter;


  const allowedCities = ['seattle','kent','auburn','burien','seatac'];
  

  if(namevalue === '') {
    setError(ordername, "Name is required");
    validated = false;
    counter++;

  }
    else {
      setSuccess(ordername);
      
      
    }

  if (pnumbervalue === '') {
    setError(pnumber, "Phone number is required");
    validated = false;
  }
  else if (isNaN(pnumbervalue)){
      setError(pnumber, 'Phone number must be a number');
    validated = false;
  }
  else if (pnumbervalue.length !== 10) {
      setError(pnumber, 'Phone number must be 10 digits');
    validated = false;
    }
  else {
      setSuccess(pnumber);
      
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
  
  if((statevalue.toLowerCase() != 'washington') && (statevalue.toLowerCase() != 'wa')) {
    setError(state, 'No service outside of Washington state.');
    validated = false;
  } 
  else {
    setSuccess(state);
    
  }

  if (cityvalue ===''){
    setError(city, 'City is required');
    validated = false;
  }
  else if(!allowedCities.includes(cityvalue.toLowerCase())){
    alert("An out of range fee of $25 will be applied.");
    setSuccess(city);
    
  }
  else {
    setSuccess(city);
    
  }

  
  return validated;

};





const validateToppings = () =>
{
  let validated = true;
  
  const toppings = document.querySelectorAll('input[class="Toppingclass"]');
  let count = 0;
  for (let i = 0; i < toppings.length; i++) {
    if (toppings[i].checked) {
      count++;
    }
  }
  if (count !== 3) {
    alert("You must select 3 toppings.");
      validated = false;
  } 
  else {
     
  }
  return validated;
};

 
