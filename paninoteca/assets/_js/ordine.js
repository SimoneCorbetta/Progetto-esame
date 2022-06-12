let testo="";
//var quantità = 0;
let costo_tot = 0;
testo+= "ordine:\n_";
function ordine(pulsante) {
    let contenitore = document.getElementById("contenitore_ordine");
    let req = new XMLHttpRequest();
    let json;
   
    
        req.onreadystatechange = function (){
            if(req.readyState == 4 && req.status == 200){
                json = req.response;
                if (pulsante.value == "melomangio") {
                    console.log(pulsante.value);
                    //testo+= quantità+=1;
                    //console.log(json["menu"][0]["panini_menu"][1]["panino"]["nome"]);      
                    testo+= " " + json["menu"][0]["panini_menu"][0]["panino"]["nome"] + "_";
                    testo+= json["menu"][0]["panini_menu"][0]["panino"]["prezzo"] + "_€\n_";
                    testo+= json["menu"][0]["panini_menu"][0]["panino"]["descrizione"] + "  \n_\n";
                    costo_tot += json["menu"][0]["panini_menu"][0]["panino"]["prezzo"];

                }else if(pulsante.value == "porcino"){
                    
                    //testo+= quantità+=1;
                    
                    testo+= " " + json["menu"][0]["panini_menu"][1]["panino"]["nome"] + "_";
                    testo+= json["menu"][0]["panini_menu"][1]["panino"]["prezzo"] + "_€\n_";
                    testo+= json["menu"][0]["panini_menu"][1]["panino"]["descrizione"] + "\n_\n";
                    costo_tot += json["menu"][0]["panini_menu"][1]["panino"]["prezzo"];

                }else if(pulsante.value == "bomba"){
                    
                    //testo+= quantità+=1;
                    
                    testo+= " " + json["menu"][2]["piadine_menu"][0]["piadina"]["nome"] + "_";
                    testo+= json["menu"][2]["piadine_menu"][0]["piadina"]["prezzo"] + "_€\n_";
                    testo+= json["menu"][2]["piadine_menu"][0]["piadina"]["descrizione"] + "\n_\n";
                    costo_tot += json["menu"][2]["piadine_menu"][0]["piadina"]["prezzo"];

                }else if(pulsante.value == "ghiottona"){
                    
                    //testo+= quantità+=1;
                    
                    testo+= " " + json["menu"][2]["piadine_menu"][1]["piadina"]["nome"] + "_";
                    testo+= json["menu"][2]["piadine_menu"][1]["piadina"]["prezzo"] + "_€\n_";
                    testo+= json["menu"][2]["piadine_menu"][1]["piadina"]["descrizione"] + "\n_\n";
                    costo_tot += json["menu"][2]["piadine_menu"][1]["piadina"]["prezzo"];

                }else if(pulsante.value == "tiramisu"){
                    
                    //testo+= quantità+=1;
                    
                    testo+= " " + json["menu"][3]["dolci_menu"][0]["dolce"]["nome"] + "_";
                    testo+= json["menu"][3]["dolci_menu"][0]["dolce"]["prezzo"] + "_€\n_\n";
                    costo_tot += json["menu"][3]["dolci_menu"][0]["dolce"]["prezzo"];

                }else if(pulsante.value == "small"){
                    console.log("small");
                    //testo+= quantità+=1;
                    if (pulsante.name == "coca cola") {

                        testo+= " " + json["menu"][1]["bevande_menu"][3]["bevanda"]["nome"] + "_";
                        testo+= json["menu"][1]["bevande_menu"][3]["bevanda"]["prezzo"] + "_€\n_";
                        testo+= json["menu"][1]["bevande_menu"][3]["bevanda"]["dimensione"] + "\n_\n";
                        costo_tot += json["menu"][1]["bevande_menu"][3]["bevanda"]["prezzo"];
                    }else if(pulsante.name == "fanta"){

                        testo+= " " + json["menu"][1]["bevande_menu"][0]["bevanda"]["nome"] + "_";
                        testo+= json["menu"][1]["bevande_menu"][0]["bevanda"]["prezzo"] + "_€\n_";
                        testo+= json["menu"][1]["bevande_menu"][0]["bevanda"]["dimensione"] + "\n_\n";
                        costo_tot += json["menu"][1]["bevande_menu"][0]["bevanda"]["prezzo"];
                    }

                }else if(pulsante.value == "regular"){
                    console.log("regular");
                    //testo+= quantità+=1;
                    
                    if (pulsante.name == "coca cola") {

                        testo+= " " + json["menu"][1]["bevande_menu"][4]["bevanda"]["nome"] + "_";
                        testo+= json["menu"][1]["bevande_menu"][4]["bevanda"]["prezzo"] + "_€\n_";
                        testo+= json["menu"][1]["bevande_menu"][4]["bevanda"]["dimensione"] + "\n_\n";
                        costo_tot += json["menu"][1]["bevande_menu"][4]["bevanda"]["prezzo"];
                    }else if(pulsante.name == "fanta"){

                        testo+= " " + json["menu"][1]["bevande_menu"][1]["bevanda"]["nome"] + "_";
                        testo+= json["menu"][1]["bevande_menu"][1]["bevanda"]["prezzo"] + "_€\n_";
                        testo+= json["menu"][1]["bevande_menu"][1]["bevanda"]["dimensione"] + "\n_\n";
                        costo_tot += json["menu"][1]["bevande_menu"][1]["bevanda"]["prezzo"];
                    }

                }else if(pulsante.value == "large"){
                    console.log("large");
                    //testo+= quantità+=1;
                    
                    if (pulsante.name == "coca cola") {

                        testo+= " " + json["menu"][1]["bevande_menu"][5]["bevanda"]["nome"] + "_";
                        testo+= json["menu"][1]["bevande_menu"][5]["bevanda"]["prezzo"] + "_€\n_";
                        testo+= json["menu"][1]["bevande_menu"][5]["bevanda"]["dimensione"] + "\n_\n";
                        costo_tot += json["menu"][1]["bevande_menu"][5]["bevanda"]["prezzo"];
                    }else if(pulsante.name == "fanta"){

                        testo+= " " + json["menu"][1]["bevande_menu"][2]["bevanda"]["nome"] + "_";
                        testo+= json["menu"][1]["bevande_menu"][2]["bevanda"]["prezzo"] + "_€\n_";
                        testo+= json["menu"][1]["bevande_menu"][2]["bevanda"]["dimensione"] + "\n_\n";
                        costo_tot += json["menu"][1]["bevande_menu"][2]["bevanda"]["prezzo"];
                    }

                }
                console.log(costo_tot);
                contenitore.innerText = testo + "\nIl prezzo totale:_" + costo_tot + "_€";

            }
        }
    
    req.open("get", "../../_file/file.json", true);
    req.responseType = "json";
    req.send();
}

function prendi_stringa(tavolo, persone) {
    //let req2 = new XMLHttpRequest();
    let cont = document.getElementById("contenitore_ordine");
    
    console.log(cont.innerText);
    window.location.assign("./cucina/inserisci_dati.php?n_tavolo="+ tavolo + "&n_persone=" + persone +"&cont="+cont.innerText);
    //req2.open("get", "./cucina/inserisci_dati.php?n_tavolo="+ tavolo + "&n_persone=" + persone +"&cont="+cont.innerText);
    //req2.send();
}