import React, {Component} from 'react';
import Axios from 'axios';

export default class Register extends Component{
    handleSubmit = e => {
        e.preventDefault();
   
        Axios.post('http://localhost:3001/register',{
            username:this.studentID,
            password: this.password,
            confirmPassword: this.confirmPassword
          }).then((response)=>{
            console.log(response);
          });
    };

    render(){
        return(
            <form onSubmit={this.handleSubmit}>
                <h3>Sign Up</h3>
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
                        onChange = {e => this.password = e.target.value}
                    
                    />
                </div>
                <div className = "form-group">
                    <label>Confirm Password</label>
                    <input type = "password" name = "confirmPassword" className= "form-control" placeholder="Confirm Password"
                        onChange = {e => this.confirmPassword = e.target.value}
                    />
                </div>
                <button className= "btn btn-primary btn-block">Sign Up</button>
            </form>
        )
    }
}