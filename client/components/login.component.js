import React, {Component} from 'react';
import Axios from 'axios'

export default class Login extends Component{
    handleSubmit = e => {
        e.preventDefault();
        Axios.post('http://localhost:3001/login',{
            username:this.studentID,
            password: this.password
          }).then((response)=>{
            console.log(response);
          });
    };
    render(){
        return(
            <form onSubmit = {this.handleSubmit}>
                <h3>Login</h3>
                <div className = "form-group">
                    <label>Student ID</label>
                    <input type = "text" name = "student_ID" className= "form-control" placeholder="Student ID"
                        onChange= {((e) =>{this.studentID = e.target.value
                        })}
                    />
                </div>
                <div className = "form-group">
                    <label>Password</label>
                    <input type = "password" name = "password" className= "form-control" placeholder="Password"
                        onChange= {((e) =>{this.password = e.target.value
                        })}
                    />
                </div>
                <button className= "btn btn-primary btn-block">Login</button>
            </form>
        )
    }
}