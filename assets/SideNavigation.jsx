import React, {Component} from 'react';

class SideNavigation extends Component {
    render() {
        return (
            <div id="menu">
                <ul className="main-menu">
                    <li className="active">
                        <a href="dashboard.html">
                            <i className="general">General</i>
                        </a>
                    </li>
                    <li>
                        <a href="ui.html">
                            <i className="components">UI</i>
                        </a>
                    </li>
                    <li>
                        <a href="forms.html">
                            <i className="forms">Forms</i>
                        </a>
                    </li>
                    <li>
                        <a href="charts.html">
                            <i className="statistics">Statistics</i>
                        </a>
                    </li>
                    <li>
                        <a href="typo.html">
                            <i className="pages">Pages</i>
                        </a>
                    </li>
                    <li>
                        <a href="tables.html">
                            <i className="tables">Tables</i>
                        </a>
                    </li>
                    <li>
                        <a href="contacts.html">
                            <i className="bonus">Bonus</i>
                        </a>
                    </li>
                </ul>
            </div>
        )
    }
}

export default SideNavigation;