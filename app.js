const express = require('express');
const sqlite3 = require('sqlite3').verbose();
const app = express();

app.set('view engine', 'ejs');

app.listen(3000);






const db = new sqlite3.Database('./klm.db', sqlite3.OPEN_READWRITE, (err)=>{
    if(err) return console.error(err.message);
    console.log('database connected');
});

let selectAllProducts = `SELECT * FROM products`;
let products = null;

db.all(selectAllProducts, [], (err, rows) => {
    if(err) return console.error(err.message);

    products = rows;

    
    products.forEach(row => {
        console.log(row.product_name);

        // products.innerHTML = `
        
        // <div class="courses-item position-relative">
        //     <img class="img-fluid" src="img/abt7.jpg" alt="">
        //     <div class="courses-text">
        //         <h4 class="text-center text-white px-3">${row.product_name}</h4>
        //         <div class="border-top w-100 mt-3">
        //             <div class="d-flex justify-content-between p-4">
        //                 <span class="text-white"><i class="fa fa-user mr-2"></i>K <small>K${row.product_price}</small> </span>
        //                 <span class="text-white"><i class="fa fa-star mr-2"></i><small>${row.product_time} Hours ago</small> </span>
        //             </div>
        //         </div>
        //         <div class="w-100 bg-white text-center p-4" >
        //             <a class="btn btn-primary" href="">Buy Product</a>
        //         </div>
        //     </div>
        // </div>

        // `;

    });

});

app.get('/', (req, res) => {
    res.render('index', {products});
});