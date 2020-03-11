var btnLocais = document.querySelector("#btnLocais");
var locais = document.querySelector("#locais");
locais.style.display = "none";

function mostrarLocais()
{
	if (locais.style.display == "none") 
	{
		locais.style.display = "block";
	}else
	if (locais.style.display == "block") 
	{
		locais.style.display = "none";
	}
	
}

btnLocais.onclick = mostrarLocais;