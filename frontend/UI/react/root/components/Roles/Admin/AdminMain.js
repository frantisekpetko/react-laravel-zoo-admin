import React from 'react';
import LoaderOut from '../../Loader/LoaderOut';
import { Container } from 'reactstrap';
import Navigation from '../../Common/Navigation';

import Footer from '../../Common/Footer';

const splashscreen = <LoaderOut/>;

const AdminMain = (props) => (

        <div>
            <Navigation/>
            <Container fluid className="container text-center app-title">
                <h1 className="header1-size">Hey Admin, You are logged in !</h1>
            </Container>
            <Footer/>
        </div>
);

export default AdminMain;