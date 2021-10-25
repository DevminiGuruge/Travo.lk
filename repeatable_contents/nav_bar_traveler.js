var title = document.getElementsByTagName("title")[0];
var navigation = document.querySelectorAll(".navigations_name");
if(title.textContent == "HOME"){
    navigation[0].classList.add("navigations_bold_style");
}else if(title.textContent == "FAQ"){
  navigation[1].classList.add("navigations_bold_style");
}else if(title.textContent == "FEEDBACK"){
    navigation[4].classList.add("navigations_bold_style");
}else if(title.textContent == "MY TRIPS"){
    navigation[5].classList.add("navigations_bold_style");
}else if(title.textContent == "VEHICLES"){
    navigation[6].classList.add("navigations_bold_style");
}

var modal = document.querySelector(".delete_modal");
var deleteAccount_btn = document.querySelector(".deleteAccount_btn");
var acc_cancelBtn = document.querySelector("#delete_cancel_btn");

deleteAccount_btn.addEventListener("click", function(e){
  modal.style.display = "block";
});

window.onclick = function(e) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
acc_cancelBtn.addEventListener("click", function(){
   modal.style.display = "none";
 });

 