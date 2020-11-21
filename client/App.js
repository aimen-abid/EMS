import React, { useState } from 'react';
import './App.css';
import '../node_modules/bootstrap/dist/css/bootstrap.min.css';
import Home from "./components/home.component"
import Nav from "./components/nav.component"
import Login from "./components/login.component"
import Register from "./components/register.component"
import {BrowserRouter,Switch,Route} from 'react-router-dom';
import { render } from '@testing-library/react';

class App extends React.Component{
  constructor(){
    super();
    this.state =  {
      loggedInStatus: "NOT_LOGGED_IN",
      user: {}
   }
  }
  render() {
    return (
      <BrowserRouter>
      <div className="App">
        <Nav/>

        <div className = "auth-wrapper">
          <div className = "auth-inner">
            <Switch>
              <Route exact path={"/"}
              render= {props=>(
                <Home {...props} loggedInStatus={this.state.loggedInStatus}/>
              )}
              />
              <Route exact path= {"/login"}
              render= {props=>(
                <Login {...props} loggedInStatus={this.state.loggedInStatus}/>
              )}
              />
              <Route exact path= {"/register"}
              render= {props=>(
                <Register {...props} loggedInStatus={this.state.loggedInStatus}/>
              )}              
              />
            </Switch>
          </div>
        </div>
      </div>
      </BrowserRouter>
    );
}
}

export default App;
