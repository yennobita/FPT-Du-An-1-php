const togglePassword = (button) => {
  button.classList.toggle("showing");
  const input = document.getElementById("password");
  input.type = input.type === "password" ? "text" : "password";
};
/////account///
const myAccount = document.querySelector(".myaccount");
const showDropdown = document.querySelector(".dropdown-menu1");
myAccount.addEventListener("click", function () {
  console.log("hii");
  showDropdown.classList.toggle("show");
});

// const listImg = document.querySelectorAll(".owl-item img");
// const imgMain = document.querySelector(".img-responsive");
// [...listImg].forEach((img) => {
//   img.addEventListener("mouseenter", (e) => {
//     [...listImg].forEach((img) => img.classList.remove("activer"));
//     imgMain.setAttribute("src", e.target.getAttribute("src"));
//     e.target.classList.add("activer");
//   });
// });

const tabs = document.querySelectorAll(".tab-item");
const tabsContent = document.querySelectorAll(".tab-new");

function handleChangeTab(e) {
  const tabId = e.target.dataset.tab;
  tabs.forEach((el) => el.classList.remove("actives"));
  e.target.classList.add("actives");
  tabsContent.forEach((el) => {
    el.classList.remove("actives");
    if (el.getAttribute("data-tab") === tabId) {
      el.classList.add("actives");
    }
  });
}

tabs.forEach((el) => el.addEventListener("click", handleChangeTab));
