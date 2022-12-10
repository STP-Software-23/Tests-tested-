import GD from "../Questions/GD.js";
import ML from "../Questions/ML.js";
import montage from "../Questions/montage.js";
import python from "../Questions/python.js";
import Robotics from "../Questions/Robotics.js";
import ST from "../Questions/ST.js";
import TOT from "../Questions/TOT.js";

let testsObj = {
    0 : ML,
    1 : Robotics,
    2 : python,
    3 : GD,
    4 : montage,
    5 : TOT,
    6 : ST,
}

let params = (new URL(document.location)).searchParams;
let token = params.get("workshop");


const form = document.getElementById('q-form')
let counter = 0
let idForRadio = 0
const yesNo = ['Yes', 'No']

testsObj[token].forEach(questionData => {
    // containing div
    let QA = document.createElement('div')
    QA.setAttribute("class", "QA")
    // question head
    let questionHead = document.createElement("p");
    let text = document.createTextNode(questionData.Q)
    questionHead.appendChild(text);
    QA.appendChild(questionHead)

    if (questionData.Q1) {
        let questionHead = document.createElement("p");
        let text = document.createTextNode(questionData.Q1)
        questionHead.appendChild(text);
        QA.appendChild(questionHead)
    }
    // line after p
    if (questionData.MCQ || questionData.Answers) {
        let line = document.createElement("div");
        line.setAttribute("class", "line")
        QA.appendChild(line)
        console.log('testing MCQ');
    }
    // create the choices div
    let containingDiv = document.createElement("div");
    containingDiv.setAttribute("id", "choices")

    // answers
    if (questionData.Answers) {
        questionData.Answers.forEach(ans => {
            let input = document.createElement("input");
            // input.setAttribute("class", "form-check-input")
            input.setAttribute("type", "radio")
            input.setAttribute("name", "Q" + counter)
            input.setAttribute("id", "Q" + idForRadio)
            input.setAttribute("value", ans)

            let label = document.createElement("label");
            label.appendChild(input)
            label.setAttribute("class", "form-check-label")
            label.setAttribute("for", "Q" + idForRadio)
            let asnwerBody = document.createTextNode(ans)
            label.appendChild(asnwerBody)

            QA.appendChild(label)

            idForRadio++
        })

    } else if (questionData.MCQ) {
        yesNo.forEach(ans => {
            let input = document.createElement("input");
            // input.setAttribute("class", "form-check-input")
            input.setAttribute("type", "radio")
            input.setAttribute("name", "Q" + counter)
            input.setAttribute("id", "Q" + idForRadio)
            input.setAttribute("value", ans)


            let label = document.createElement("label");
            label.appendChild(input)
            label.setAttribute("class", "form-check-label")
            label.setAttribute("for", "Q" + idForRadio)
            let asnwerBody = document.createTextNode(ans)
            label.appendChild(asnwerBody)

            QA.appendChild(label)
            idForRadio++
        })

    } else {

        let label = document.createElement("textarea");
        label.setAttribute("class", "form-control")
        label.setAttribute("rows", 3)
        label.setAttribute("name", "Q" + counter)
        QA.appendChild(label)
    }
    counter++
    form.appendChild(QA)
});

const button = document.createElement('button')
button.setAttribute("class", "btn btn-success")
button.setAttribute("name", "submit")
let text = document.createTextNode('Submit')
button.appendChild(text)

let workshopID = document.createElement('input')
workshopID.setAttribute("value", token)
workshopID.setAttribute("name","workshopID")
workshopID.style.visibility = "hidden"
form.appendChild(workshopID)
form.appendChild(button)