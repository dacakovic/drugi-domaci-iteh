import React, { Component } from "react";
import ReactDOM from "react-dom";

export default class Student extends Component {
    constructor(props) {
        super(props);

        this.state = {
            student: this.props.student
        };
    }

    render() {
        return (
            <div className="row justify-content-center">
                <div className="col-2">{this.state.student.ime}</div>
                <div className="col-3 ">{this.state.student.dugovanja}</div>
                <div className="col-3 ">{this.state.student.broj_telefona}</div>
                <div className="col-3">
                    <a
                        href={
                            "http://127.0.0.1:8000/student/dugovanja?id_student=" +
                            this.state.student.id
                        }
                        className="btn btn-primary "
                    >
                        {" "}
                        POGLEDAJ
                    </a>
                </div>
            </div>
        );
    }
}
if (document.getElementById("student")) {
    ReactDOM.render(<Student />, document.getElementById("student"));
}
