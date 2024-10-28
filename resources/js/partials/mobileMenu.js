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

const mobileDropdown = document.querySelector("#mobileDropdown2");
const mobileDropdownUl = document.querySelector("#mobileDropdownUl2");


const mobileDropdownHandler = () => {
  if (mobileDropdownUl.classList.contains("max-h-0")) {
      // Otwieramy dropdown
      mobileDropdownUl.classList.remove("max-h-0", "opacity-0");
      mobileDropdownUl.classList.add("max-h-[500px]", "opacity-100");
  } else {
      // Zamykamy dropdown
      mobileDropdownUl.classList.remove("max-h-[500px]", "opacity-100");
      mobileDropdownUl.classList.add("max-h-0", "opacity-0");
  }
  console.log("ok");
};

mobileDropdown && mobileDropdown.addEventListener("click", mobileDropdownHandler);

