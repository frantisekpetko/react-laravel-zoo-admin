import React, {Component} from 'react';
import {
    Button,
    Container,
    Col,
    UncontrolledAlert
} from 'reactstrap';

import Nav from '../../Navigation';
import LoaderIn from '../../Loader/LoaderIn';
import { Link } from 'react-router-dom';

import Footer from '../../Footer';
import ajax from '../../../utils/ajax';

class AdminLogin extends Component {

    constructor(props){
        super(props);
        this.state = {
            email : '',
            password: '',
            loading: false
        }
    }

    onSubmit(e){
        e.preventDefault();
        this.setState({loading: true});
        const {email , password} = this.state;

        ajax.post('api/admin/login', {
            email,
            password
            })
            .then(response=> {
                this.setState({err: false});
                this.props.history.push("home") ;

            })
            .catch(error=> {
                this.refs.email.value="";
                this.refs.password.value="";
                this.setState({err: true});
            });
    }

    onChange(e){
        const {name, value} = e.target;
        this.setState({[name]: value});
    }

    render() {
        let loading = this.state.loading;
        let error = this.state.err ;

        let msg = (!error) ? 'Login Successful' : 'W' ;
        const alert=
        <UncontrolledAlert color="danger">
            Wrong Credentials!
        </UncontrolledAlert>;

        let name = (!error) ? 'alert alert-success' : 'alert alert-danger';

        const splashscreen = <LoaderIn/>;

        const login =
            <div>
                <Nav />
                <Container fluid className="container-customized mt-5">

                    <Col sm={{ size: 8, order: 2, offset: 4 }}>

                        <h2>Admin Login</h2>

                        <div className="col-md-offset-2 col-md-8 col-md-offset-2">
                            {error !== undefined && alert}
                        </div>
                        <form className="form-horizontal" role="form" method="POST" onSubmit= {this.onSubmit.bind(this)}>
                            <div className="form-group">

                                <label htmlFor="email" className="col-md-4 control-label">E-Mail Address</label>

                                <div className="col-md-6">
                                    <input id="email" type="email" ref="email" className="form-control" name="email"  onChange={this.onChange.bind(this)} required />
                                </div>
                            </div>

                            <div className="form-group">
                                <label htmlFor="password" className="col-md-4 control-label">Password</label>

                                <div className="col-md-6">
                                    <input id="password" type="password" ref="password" className="form-control" name="password"  onChange={this.onChange.bind(this)}  required />
                                </div>
                            </div>

                            <div className="form-group">
                                <div className="col-md-6 col-md-offset-4">
                                    <div className="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" /> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>


                            <div className="form-group">
                                <div className="col-md-8 col-md-offset-4">
                                    {/*button with type submit */}
                                    {/*<Button color="success">Login</Button>*/}
                                    <button type="submit" className="btn btn-success">
                                        Login
                                    </button>

                                    <li className="btn btn-link">
                                        <Link to="forgotpassword">Forgot Your Password?</Link>
                                    </li>
                                </div>
                            </div>
                        </form>
                    </Col>
                </Container>
                <Footer/>
            </div>;

        return loading ? splashscreen : login;

    }

}


export default AdminLogin