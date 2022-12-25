
const db = require("../config/database");
class Student{
   
    static all(){
        return new Promise((resolve, reject)=>{
            const query = "SELECT * FROM students";
          
            db.query(query, (err, results) => {
                resolve(results);
            });
        });
    } 

    static create(req){
        return new Promise((resolve, reject)=>{
            const query = "INSERT INTO students SET ?";
            
            db.query(query, req,(err, results)=>{
                if(err){
                    throw err;
                }
                const query = `SELECT * FROM students WHERE id = ${results.insertId}`;
                db.query(query, (err, results) => {
                    resolve(results);
                });
            });
        });
    }
}


module.exports = Student;