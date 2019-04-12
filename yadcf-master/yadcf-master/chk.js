var Api="http://localhost/onesource_admin/";
purchaseTableLoad();


function purchaseTableLoad(){

    fetch(Api+'backend/showPurchaseTable.php', {
     method: 'GET',
     headers: new Headers({
         'content-type': 'application/json',
         'Accept': 'application/json',
     })
 })
 .then((response) => response.json())
 .then((responseJson) =>{
     console.log(responseJson);
     // alluserdata = responseJson;
     responseJson.map((tr)=>{
     
        document.getElementById("exampleTable").innerHTML+= showPurchaseTable(tr);

     })
 })
 .catch((error)=>{
 console.error(error);
   });
}


function showPurchaseTable(data){

 return `
          <tr>
             <td>${data.p_id}</td>
             <td>${data.name}</td>
             <td>${data.phone}</td>
             <td>${data.ranges}</td>
             <td>${data.societyName}</td>
             <td>${data.type}</td>
         </tr>
         
         `;
}