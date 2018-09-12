import React, {Component} from 'react';
import RightHeader from './RightHeader'

class Header extends React.Component {
    render() {
        return (
            <div id="header" >
                <a id="menu-link" className="head-button-link menu-hide" href="#menu">
                    <span>Menu</span>
                </a>
                <a href="dashboard.html" className="logo">
                    <h1>Logo</h1>
                </a>
                <form className="search" action="#">
                    <input type="text" className="form-control" name="q" placeholder="Search..." />
                </form>
                <RightHeader />
            </div>
        );
    }
}

export default Header;