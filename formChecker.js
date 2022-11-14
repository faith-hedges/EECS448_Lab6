const email = document.getElementById("email");
const password = document.getElementById("password");

const checkEmail = () => {
  var format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if(email.value.match(format) && password.value!="" && checkNumbers())
  {
    return true;
  }
  else
  {
    if(!email.value.match(format))
    {
      alert("Invalid email");
    }
    else if(password.value=="")
    {
      alert("Invalid password");
    }
    else
    {
      alert("Quantities cannot be negative")
    }
    event.preventDefault();
    return false;
  }
};

const incrementCount = document.getElementById("addtocart");
const incrementCount2 = document.getElementById("addtocart2");
const incrementCount3 = document.getElementById("addtocart3");
const incrementCount4 = document.getElementById("addtocart4");

const totalCount = document.getElementById("total-count");
const totalCount2 = document.getElementById("total-count2");
const totalCount3 = document.getElementById("total-count3");
const totalCount4 = document.getElementById("total-count4");

var count = 0;
var count2 = 0;
var count3 = 0;
var count4 = 0;

totalCount.innerHTML = count;
totalCount2.innerHTML = count;
totalCount3.innerHTML = count;
totalCount4.innerHTML = count;

const getCount = () => {
  return totalCount;
}

const handleIncrement = () => {
  count++;
  totalCount.innerHTML = count;
};

const handleIncrement2 = () => {
  count2++;
  totalCount2.innerHTML = count2;
};

const handleIncrement3 = () => {
  count3++;
  totalCount3.innerHTML = count3;
};

const handleIncrement4 = () => {
  count4++;
  totalCount4.innerHTML = count4;
};


const clear = () => {
  totalCount.innerHTML = 0;
  totalCount2.innerHTML = 0;
  totalCount3.innerHTML = 0;
  totalCount4.innerHTML = 0;
}
clearButton.addEventListener("click", clear);

incrementCount.addEventListener("click", handleIncrement);
incrementCount2.addEventListener("click", handleIncrement2);
incrementCount3.addEventListener("click", handleIncrement3);
incrementCount4.addEventListener("click", handleIncrement4);

decrementCount.addEventListener("click", handleDecrement);
