/*##################################################
load activeX - carrega activeX
##################################################*/
function _loadHTTP()
	{
		try
			{
				xhttp=new XMLHttpRequest();
			}
		catch(ee)
			{
				try
					{
						xhttp=new ActiveXObject("Msxml2.XMLHTTP");
					}
				catch(e)
					{
						try
							{
								xhttp=new ActiveXObject("Microsoft.XMLHTTP");
							}
						catch(E)
							{
								xhttp=false;
							}
					}
			}
		return(xhttp);
	}
/*##################################################
load html - carrega html
[objeto] [metodo] [elemento]
##################################################*/
function _loadHTML(object, element)
	{
		var xhttp=_loadHTTP();
		var receiver=document.getElementById(element); // elemento recebe
		receiver.innerHTML='<div id="ajaxLoad"><h1>'+object.title+'</h1><p>&nbsp;</p><p><img src="ajax-loader.gif" /> carregando ...</p></div>'; // animacao carregando
		xhttp.open("get", object.href, true); // carrega a pagina
		// executada quando o navegador obter codigo
		xhttp.onreadystatechange=function()
			{
				if(xhttp.readyState==4)
					{
						var content=xhttp.responseText; // le o texto
						var receiver=document.getElementById(element); // exibe conteudo
						receiver.innerHTML=content; // elemento recebe conteudo
					}
			}
		xhttp.send(null);
		return(false);
	}
/*##################################################
envia formulario [form] o proprio formulario em questao
##################################################*/
function _formSend(form)
	{
		var xhttp=_loadHTTP();
		var receiver=document.getElementById('msgF'); // elemento recebe
		receiver.innerHTML='<img src="ajax-loader.gif" /> enviando ...'; // animacao carregando
		var variable=""; // nao pode ser nulo tem que ser vazio
		for(var i=0; i<form.length; i++)
			{
				if(form.elements[i].tagName.toLowerCase()=="input" || form.elements[i].tagName.toLowerCase()=="select" || form.elements[i].tagName.toLowerCase()=="textarea")
					{
						if(form.elements[i].type.toLowerCase()=="file")
							alert('ERRO: Não é possível enviar arquivos por AJAX!');
						if(form.elements[i].type.toLowerCase()=="radio" || form.elements[i].type.toLowerCase()=="checkbox")
							{
								if(form.elements[i].checked)
									variable+=form.elements[i].name+"="+escape(form.elements[i].value)+"&";
							}
						  else
							variable+=form.elements[i].name+"="+escape(form.elements[i].value)+"&";
					}
			}
		xhttp.open(form.method, form.action, true);
		xhttp.setRequestHeader("Content-Type", form.enctype);
		xhttp.setRequestHeader("Cache-Control", "no-store, no-cache, must-revalidate");
		xhttp.setRequestHeader("Cache-Control", "post-check=0, pre-check=0");
		xhttp.setRequestHeader("Pragma", "no-cache");
		// executada quando o navegador obter codigo
		xhttp.onreadystatechange=function()
			{
				if(xhttp.readyState==4)
					{
						var content=xhttp.responseText; // le o texto
						var receiver=document.getElementById('formD'); // exibe conteudo
						receiver.innerHTML=content; // elemento recebe conteudo
					}
			}
		xhttp.send(variable);
		return(false);
	}
/*##################################################
abre menu [menu]
##################################################*/
function _openMenu(element)
	{
		_closeMenu('menu'); // fecha menu inteiro
		var object=document.getElementById(element);
		if(object.style.display=="none")
			object.style.display="block";
		  else
			object.style.display="none";
		return(false);
	}
/*##################################################
fecha menu inteiro [menu]
##################################################*/
function _closeMenu(element)
	{
		var object=document.getElementById(element);
		var tags=object.getElementsByTagName('ul');
		for(i=0; i<tags.length; i++)
			tags[i].style.display="none";
		return(false);
	}
/*##################################################
mostra acesso rapido [lista]
##################################################*/
function _showQuickAccess(element)
	{
		var object=document.getElementById(element);
		if(object.style.display=="none")
			object.style.display="block";
		  else
			object.style.display="none";
		return(false);
	}
/*##################################################
abre menu interno [menu]
##################################################*/
function _openMenuIntern(element)
	{
		var object=document.getElementById(element);
		if(object.style.display=="none")
			object.style.display="block";
		  else
			object.style.display="none";
		return(false);
	}
