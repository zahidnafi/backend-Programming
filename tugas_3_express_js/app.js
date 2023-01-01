// import express js 
const express = require("express");

// import router
const router = require("./routes/api.js");

// membuat objek express
const app = express();

// menggunakan middleware
app.use(express.json());
app.use(express.urlencoded({extended:true}));

// menggunakan routing (router)
app.use(router);

// mendefinisikan port
app.listen(3000);