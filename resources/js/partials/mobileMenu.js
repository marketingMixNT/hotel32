const mobileMenu = document.querySelector("#mobileMenu");
const closeBtn = document.querySelector("#closeMenu");
const openBtn = document.querySelector("#openMenu");

const menuHandler = () => {
    mobileMenu.classList.toggle("translate-x-[100%]");
    mobileMenu.classList.toggle("opacity-0");
    mobileMenu.classList.toggle("opacity-100");
};

openBtn && openBtn.addEventListener("click", menuHandler);
closeBtn && closeBtn.addEventListener("click", menuHandler);

// mobile dropdown

const mobileDropdown = document.querySelector("#mobileDropdown");
const mobileDropdownUl = document.querySelector("#mobileDropdownUl");


const mobileDropdownHanlder = () => {
  mobileDropdownUl.classList.toggle("max-h-[500px]");
  mobileDropdownUl.classList.toggle("opacity-100");
  mobileDropdownUl.classList.toggle("max-h-[0px]");
  mobileDropdownUl.classList.toggle("opacity-0");
 

}

mobileDropdown.addEventListener("click", mobileDropdownHanlder);