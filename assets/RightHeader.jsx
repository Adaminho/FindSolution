import React, {Component} from 'react';

class RightHeader extends React.Component {
    render() {
        return (
            <div className="right">
                <div className="dropdown left">
                    <a className="dropdown-toggle head-button-link" data-toggle="dropdown" href="#">
                        <span className="notice-new">3</span>
                    </a>
                    <div className="dropdown-menu pull-right message-list">
                        <div className="triangle"></div>
                        <div className="notice-title">You Have 3 Messages</div>
                        <div className="notice-message">
                            <a href="#" className="box">
                                <div className="avatar">
                                    <img src="images/avatar-2.png" alt="avatar-2"/>
                                </div>
                                <div className="info">
                                    <div className="author">Adam Maliszewski</div>
                                    <div className="date">Sep 13, 2018</div>
                                    <div className="clearfix"></div>
                                    <div className="text">This is first test message.</div>
                                </div>
                                <div className="clearfix"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div className="dropdown left">
                    <a className="dropdown-toggle head-button-link norification" data-toggle="dropdown" href="#">
                        <span className="notice-new">2</span>
                    </a>
                    <div className="dropdown-menu pull-right message-list">
                        <div className="triangle"></div>
                        <div className="notice-title">You Have 2 Notifications</div>
                        <div className="notice-message">
                            <a href="#" className="box">
                                <div className="avatar">
                                    <img src="images/avatar-2.png" alt="avatar-2"/>
                                </div>
                                <div className="info">
                                    <div className="author">Adam Maliszewski</div>
                                    <div className="date">Sep 13, 2018</div>
                                    <div className="clearfix"></div>
                                    <div className="text">This is first test message.</div>
                                </div>
                                <div className="clearfix"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div className="dropdown left"></div>
                <div className="dropdown left profile"></div>
                <div className="clearfix"></div>
            </div>
        );
    }
}

export default RightHeader;
