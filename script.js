// //call modal app
// const addModal=document.getElementById("addModal");
//
//
// //const btnAdd=document.querySelector('.btn-info');
//
// //btnAdd.addEventListener('click',()=>{
//     addModal.classList.add('modal-show');
// });



//const TableHospitals=document.getElementById('dataTable');
//const TableHospitals=document.querySelector('.table-bordered');



//Create element and render user
// const renderHospital= doc => {
//     const tr=`
//         <tr>
//             <td>${doc.data().hospitalName}</td>
//             <td>${doc.data().Email}</td>
//
//             <td>${doc.data().County}</td>
//             <td>${doc.data().Level}</td>
//             <td>${doc.data().Phone}</td>
//             <td>${doc.data().Capacity}</td>
//             <td>
//                 <button type="button" class="btn btn-success">Edit</button>
//                 <button type="button" class="btn btn-danger">Delete</button>
//             </td>
//         </tr>
//     `;
//     TableHospitals.insertAdjacentHTML('beforeend',tr);
// }
//
//
// //Get all users
//
// db.collection('Hospitals').get().then(querySnapshot=>{
//     querySnapshot.forEach(doc=>{
//         renderHospital(doc);
//
//     })
// })