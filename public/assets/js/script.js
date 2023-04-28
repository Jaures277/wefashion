


/** dynamic field creation with javascript
const addBtn = document.querySelector(".add");

const input = document.querySelector(".inp-group");

function addInput(){
    const size = document.createElement("select")
    size.type="text";
    size.options="";
    size.placeholder = "Entrer la taille";

    const quantity = document.createElement("input");
    quantity.type="number";
    quantity.placeholder = "Entrer la quantite";

    const btn=document.createElement("a");
    btn.className = "delete";
    btn.innerHTML = "&times";

    const flex=document.createElement("div");
    flex.className = "flex";

    input.appendChild(flex);
    input.appendChild(size);
    input.appendChild(quantity);
    input.appendChild(btn);
}

addBtn.addEventListener("click", addInput);
*/
