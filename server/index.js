const mysql = require('mysql');
const express = require('express');
const bodyparser = require('body-parser');
const cors = require('cors');
const app = express();
app.use(express.json());
app.use(cors());
const mysqlConnection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: 'password',
    database: 'emergency management system'

});
mysqlConnection.connect((err)=>{
    if(!err)
    console.log('DB connection succeeded');
    else
    console.log('DB connection failed \n ERROR: '+ JSON.stringify(err, undefined, 2));
});
app.post('/register', (req,res)=>{
    const username = req.body.username;
    const password = req.body.password;
    const confirmPassword = req.body.confirmPassword;
    if(password == confirmPassword){
        mysqlConnection.query("INSERT INTO login values (?,?)", [username,password],(err,result)=>{console.log(err)});
        res.send({message:"Registered"})
    }
    else
    {
        res.send({message: "Password does not match"})
    }
});
app.post('/login', (req,res)=>{
    const username = req.body.username;
    const password = req.body.password;
    mysqlConnection.query("SELECT * FROM login where ID = ? and password = ?", [username,password],(err,result)=>{
        if(err){
            res.send({err: err});
        }
        if(result.length>0){
            res.send(result);
        } else{
            res.send({message: "Incorrect Username or Password"});
        }
    });
});


app.listen(3001,()=>console.log('Express server is running at port no : 3000'));