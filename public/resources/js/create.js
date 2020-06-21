
function addOption() {
  let input = document.createElement("input");
  input.type = "text";
  input.classList.add("form-control", "space-top");
  input.required = true;
  let opcaoNumber = document.getElementById('opcaoList').childElementCount;
  input.name = "opcao" + opcaoNumber;
  input.id = "opcao" + opcaoNumber;
  document.getElementById('numberOptions').value = opcaoNumber;
  document.getElementById('opcaoList').appendChild(input);
}
