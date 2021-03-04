const filterOption = document.querySelector(".filters");
let table = document.getElementById("todolist");
let tr = table.getElementsByTagName("tr");
let value, td;

filterOption.addEventListener("click", filters);

function filters(e){
  for (let i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    switch (e.target.value) {
      case "all":
          tr[i].style.display = "";
          break;
      case "completed":
          if (td.textContent == "Completed"){
            tr[i].style.display = "";
          }else{
            tr[i].style.display = "none";
          }
          break;
      case "uncompleted":
          if(td.textContent == "Not Completed"){
            tr[i].style.display = "";
          }
          else{
            tr[i].style.display = "none";
          }
          break;
    }
  }
}
