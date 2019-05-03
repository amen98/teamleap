/*jslint devel: true */

/*global
alert 
*/
/*exported verifForm alert */
/*jshint unused:false*/


function surligne(champ,erreur)
{
if(erreur)
champ.style.backgroundColor = "#fba";
else
champ.style.backgroundColor = "#98FB98";
}
function verifref(champ)
{
if(champ.value.length !=6 || isNaN(champ.value) )
{
surligne(champ,true);
return false;
}
else
{
surligne(champ, false);
return true;
}
}


function verifDate(champ)
{
   
 var a=champ.value;
 var annee=a.substring(0,4);
 a=a.slice(5);
 var mois=a.substring(0,3);
 a=a.slice(3);

 var aaaa=parseInt(annee);
 var mm=parseInt(mois);
 mm=mm-1;
  
 var dd=parseInt(a);
 var now=new Date();			// date courante
 var b=new Date(aaaa,mm,dd); // date à tester

 if(now > b){surligne(champ,true);
    return false;
alert('Verifier la date SVP');
}
    else{surligne(champ, false);
        return true;
    }

}


function verifMail(champ)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
     
      return false;
   }
   else
   {
      surligne(champ, false);
      
      return true;
   }
}

function verifNom(champ)
{
   if(champ.value.length < 3 || champ.value.length > 25)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}
function verifTel(champ)
{
   
   if(champ.value.length != 8 || isnum(champ.value)==false)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}
function isnum($valeur)
{
  var checkOK = "0123456789";
  var allValid = true;
  var decPoints = 0;
  var allNum = "";

  for ( i = 0 ;  i < $valeur.length ;  i++ ) 
  {
    ch = $valeur.charAt(i);
    for ( j = 0 ;  j < checkOK.length ;  j++ ) 
      if ( ch == checkOK.charAt(j) ) 
        break;
      if ( j == checkOK.length ) 
      {
        allValid = false;
        break;
      }
        allNum += ch;
    }
  if ( !allValid ) 
  {
    return (false);
  }
}
function verifCin(champ)
{
   
   if((champ.value.length != 8) || isnum(champ.value)==false)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}
function verifPrenom(champ)
{
   
   if(champ.value.length < 3 || champ.value.length > 25)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}
function verifAdresse(champ)
{
   
   if(champ.value.length < 10 || champ.value.length > 40)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}
function verifType(champ)
{
    a=document.getElementById("type").value ;
  
   if(a == "")
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}
function verifCin2(champ)
{
    a=document.getElementById("cinClient").value ;
  
   if(a == "")
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}
function verifCommande2(champ)
{
    a=document.getElementById("idCommande").value ;
  
   if(a == "")
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}
function verifTransp2(champ)
{
    a=document.getElementById("idTransporteur").value ;
  
   if(a == "")
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}
function verifDest(champ)
{
    a=document.getElementById("dest").value ;
  
   if(a == "")
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}
function verifForm(f)
{
  
   var mailOk = verifMail(f.mail);
   var typeOk = verifType(f.type);
   var nomOk = verifNom(f.nom);
   var prenomOk = verifNom(f.prenom);
   var cinOk = verifCin(f.cin);
   var telOk = verifTel(f.tel);

   if(mailOk && typeOk && nomOk && prenomOk && cinOk && telOk)
      return true;
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}
function verifForm2(f)
{
  
   var dateOk = verifDate(f.date);
   var destOk = verifDest(f.dest);
   var adrOk = verifAdresse(f.adr);
   var cinClientOk = verifCin2(f.cinClient);
   var idCommandeOk = verifCommande2(f.idCommande);
   var idTransporteurOk = verifTransp2(f.idTransporteur);

   if(dateOk && destOk && adrOk && cinClientOk && idCommandeOk && idTransporteurOk)
      return true;
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}
function verifForm5(f)
{
  
   var dateOk = verifDate(f.date);
   var destOk = verifDest(f.dest);
   var adrOk = verifAdresse(f.adr);

   var idTransporteurOk = verifTransp2(f.idTransporteur);

   if(dateOk && destOk && adrOk && idTransporteurOk)
      return true;
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}
function verifForm3(f)
{
  
   var mailOk = verifMail(f.mail);
   var typeOk = verifType(f.type);
   var nomOk = verifNom(f.nom);
   var prenomOk = verifNom(f.prenom);
  
   var telOk = verifTel(f.tel);

   if(mailOk && typeOk && nomOk && prenomOk && telOk)
      return true;
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}
function verifForm4(f)
{
  
   var dateOk = verifDate(f.date);
   var destOk = verifDest(f.dest);
   var adrOk = verifAdresse(f.adr);
  
   var idTransporteurOk = verifTransp2(f.idTransporteur);

   if(dateOk && destOk && adrOk && cinClientOk)
      return true;
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}