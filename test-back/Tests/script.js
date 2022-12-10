import testData from "./Questions/ML.js"

const form = document.getElementById('q-form')
let counter = 0
let idForRadio = 0
const yesNo = ['Yes', 'No']

testData.forEach(questionData => {
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
button.setAttribute("type", "submit")
button.setAttribute("name", "submit")
let text = document.createTextNode('Submit')
button.appendChild(text)
form.appendChild(button)