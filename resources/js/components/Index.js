import React, { Component } from "react";
import ReactDOM from "react-dom";
import Student from "./Student";

export default class Index extends Component {
    constructor(props) {
        super(props);
        this.pocetniURL = "http://127.0.0.1:8000/";
        this.state = {
            selectedStudent: "",
            studenti: []
        };
        this.ucitajStudente();
    }

    ucitajStudente() {
        axios.get(this.pocetniURL + "studenti/get").then(res => {
            const studenti = res.data.studenti;
            this.setState({ studenti });
        });
    }

    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <h3>
                        Pozdrav, dobrodosli na{" "}
                        <span style={{ color: "red" }}>
                            naplat<b>U</b>sluga.com{" "}
                        </span>{" "}
                    </h3>
                </div>
                <div className="row justify-content-center">
                    <div className="col-2">IME:</div>
                    <div className="col-3">DUGOVANJE:</div>
                    <div className="col-3">BROJ TELEFONA:</div>
                    <div className="col-3"></div>
                </div>
                <div className="justify-content-center">
                    {this.state.studenti.map(student => {
                        return <Student key={student.id} student={student} />;
                    })}
                </div>
            </div>
        );
    }
}

if (document.getElementById("index")) {
    ReactDOM.render(<Index />, document.getElementById("index"));
}
