const express = require("express");

//membuat object express
const app = express();


/** 
 * membuat  routing
*/
app.get("/",(req,res) => {
    res.send("Hello Express");
});

//mendefinisikan port
app.listen(3000);