<!DOCTYPE html>
<html>
  <head>
    <style>
      table {
        border-collapse: collapse;
        width:100%;
      }
      @page {
        margin-left: 2.54cm;
        margin-right: 2.54cm;
      }
    </style>
  </head>

  <body>
    <table>
      <tr>
        <td align="center">
          <img src="assets/img/unimas002.png" alt="logo" style="width:200px;">
        </td>
      </tr>
      <tr>
        <td align="center" style="padding-bottom: 10px;">
          FACULTY OF COMPUTER SCIENCE AND INFORMATION TECHNOLOGY
        </td>
      </tr>
      <tr>
        <td style="padding:1px;border:solid black 1.0pt;text-align: center;font-size:12.0pt;background-color: #D3D3D3;">
          <strong>REPORT OF RIGOROUS ASSESSMENT</strong>
        </td>
      </tr>
    </table>


    <table>
      <tr>
        <td style="padding: 7px;" colspan="5">
          <strong>Part A: Applicant Details</strong>
        </td>
      </tr>
    </table>

    <table style="border:solid black 1pt;">
      <tr>
        <td style="padding: 7px;border:solid black 1pt;width:25%;">
          Full Name
        </td>
        <td  style="padding: 7px;" colspan="4">
          {{$session->student->profile->name}}
        </td>
      </tr>
      <tr >
        <td style="padding: 7px;border:solid black 1pt;">Programme Applied</td>
        <td style="padding: 7px;border:solid black 1pt;width:7%;text-align:center;">
          @if ($session->student->type == 1)
            <strong>/</strong>
          @endif
        </td>
        <td style="padding: 7px;border:solid black 1pt;">MSc.</td>
        <td style="padding: 7px;border:solid black 1pt;width:7%;text-align:center;">
          @if ($session->student->type == 2)
            <strong>/</strong>
          @endif
        </td>
        <td style="padding: 7px;border:solid black 1pt;">PhD.</td>
      </tr>
      <tr >
        <td style="padding: 7px;border:solid black 1pt;">
          Title of Proposal
        </td>
        <td style="padding: 7px;border:solid black 1pt;" colspan="4">
          {{ $session->proposal_title }}
        </td>
      </tr>
      <tr>
        <td style="padding: 7px;border:solid black 1pt;">
         Potential Supervisor
        </td>
        <td style="padding: 7px;border:solid black 1pt;" colspan="4">
          {{ $session->student->supervisor->profile->name}}
        </td>
      </tr>
      <tr>
        <td style="padding: 7px;border:solid black 1pt;">
          Potential Co-Supervisor (if any)
        </td>
        <td style="padding: 7px;border:solid black 1pt;" colspan="4">
          -
        </td>
      </tr>
    </table>

    <table>
      <tr>
        <td style="padding: 7px;">
          <strong>Part B. Evaluation of Proposal</strong>
        </td>
      </tr>
    </table>

    <table>
      <tr>
        <td style="padding: 7px;border-top:solid black 1pt;border-left:solid black 1pt;border-right:solid black 1pt;">
          1.The overall quality of content
        </td>
      </tr>
      <tr style="padding: 7px;border-left:solid black 1pt;border-right:solid black 1pt;">
        <td>
          <table style="padding: 5px;">
            <tr style="padding: 7px;border:solid black 1pt;">
              <td style="width: 33.33%">
                <input type="checkbox" value="1">
                <label>Arguments are not clear/incorrect</label>
              </td>
              <td style="width: 33.33%">
                <input type="checkbox" value="2">
                <label>Arguments are partially clear and need to be refined</label>
              </td>
              <td style="width: 33.33%">
                <input type="checkbox" value="3">
                <label>Arguments are clearly presented</label>
              </td>
            </tr>
            <tr style="padding: 7px;border:solid black 1pt;">
              <td style="width: 33.33%">
                <input type="checkbox" value="1">
                <label>Problem statements are not clearly stated</label>
              </td>
              <td style="width: 33.33%">
                <input type="checkbox" value="2">
                <label>Problem statements are adequate but need to be refined</label>
              </td>
              <td style="width: 33.33%">
                <input type="checkbox" value="3">
                <label>Problem statements are clearly stated</label>
              </td>
            </tr>
            <tr style="padding: 7px;border:solid black 1pt;">
              <td style="width: 33.33%">
                <input type="checkbox" value="1">
                <label>Objectives are not clearly defined</label>
              </td>
              <td style="width: 33.33%">
                <input type="checkbox" value="2">
                <label>Objectives are clear but need to be refined</label>
              </td>
              <td style="width: 33.33%">
                <input type="checkbox" value="3">
                <label>Objectives are well defined</label>
              </td>
            </tr>
            <tr style="padding: 7px;border:solid black 1pt;">
              <td style="width: 33.33%">
                <input type="checkbox" value="1">
                <label>Does not reflect the understanding of subject matter and associated literature</label>
              </td>
              <td style="width: 33.33%">
                <input type="checkbox" value="2">
                <label>Reflects understanding of subject matter and related literature</label>
              </td>
              <td style="width: 33.33%">
                <input type="checkbox" value="3">
                <label>Exhibits mastery of subject matter and relevant literature</label>
              </td>
            </tr>
            <tr style="padding: 7px;border:solid black 1pt;">
              <td style="width: 33.33%">
                <input type="checkbox" value="1">
                <label>Demonstrates an elementary understanding of theoretical concepts</label>
              </td>
              <td style="width: 33.33%">
                <input type="checkbox" value="2">
                <label>Demonstrates an adequate knowledge of theoretical concepts</label>
              </td>
              <td style="width: 33.33%">
                <input type="checkbox" value="3">
                <label>Demonstrates mastery of theoretical concepts</label>
              </td>
            </tr>
            <tr style="padding: 7px;border:solid black 1pt;">
              <td style="width: 33.33%">
                <input type="checkbox" value="1">
                <label>The methodology is unorganised and lack of explanation</label>
              </td>
              <td style="width: 33.33%">
                <input type="checkbox" value="2">
                <label>The methodology is adequately explained</label>
              </td>
              <td style="width: 33.33%">
                <input type="checkbox" value="3">
                <label>The methodology is clearly explained and well organised</label>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr >
        <td align="top"style="padding-left: 30px;border-bottom:solid black 1pt;border-left:solid black 1pt;border-right:solid black 1pt; height: 130px;vertical-align: text-top;">Comments:</td>
      </tr>
    </table>

    <table style="page-break-before: always;">
      <tr>
        <td style="padding: 7px;border-top:solid black 1pt;border-left:solid black 1pt;border-right:solid black 1pt;">
          2.The overall quality of writing
        </td>
      </tr>
      <tr style="padding: 7px;border-left:solid black 1pt;border-right:solid black 1pt;">
        <td>
          <table style="padding: 5px;">
            <tr style="padding: 7px;border:solid black 1pt;">
              <td style="width: 33.33%">
                <input type="checkbox" value="1">
                <label>Writing is weak</label>
              </td>
              <td style="width: 33.33%">
                <input type="checkbox" value="2">
                <label>Writing is adequate</label>
              </td>
              <td style="width: 33.33%">
                <input type="checkbox" value="3">
                <label>Writing is clear and effectively communicated idea</label>
              </td>
            </tr>
            <tr style="padding: 7px;border:solid black 1pt;">
              <td style="width: 33.33%">
                <input type="checkbox" value="1">
                <label>Numerous grammatical and spelling errors apparent</label>
              </td>
              <td style="width: 33.33%">
                <input type="checkbox" value="2">
                <label>Some grammatical and spelling errors apparent</label>
              </td>
              <td style="width: 33.33%">
                <input type="checkbox" value="3">
                <label>No grammatical or spelling errors</label>
              </td>
            </tr>
            <tr style="padding: 7px;border:solid black 1pt;">
              <td style="width: 33.33%">
                <input type="checkbox" value="1">
                <label>Organisation is poor</label>
              </td>
              <td style="width: 33.33%">
                <input type="checkbox" value="2">
                <label>Organisation is logical</label>
              </td>
              <td style="width: 33.33%">
                <input type="checkbox" value="3">
                <label>Organisation is excellent</label>
              </td>
            </tr>
            <tr style="padding: 7px;border:solid black 1pt;">
              <td style="width: 33.33%">
                <input type="checkbox" value="1">
                <label>Reference format is problematic</label>
              </td>
              <td style="width: 33.33%">
                <input type="checkbox" value="2">
                <label>Reference contains few formatting errors</label>
              </td>
              <td style="width: 33.33%">
                <input type="checkbox" value="3">
                <label>Reference is well-formatted</label>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td align="top"style="padding-left: 30px;border-bottom:solid black 1pt;border-left:solid black 1pt;border-right:solid black 1pt; height: 130px;vertical-align: text-top;">Comments:</td>
      </tr>
      <tr>
        <td align="top"style="padding: 7px;border-left:solid black 1pt;border-right:solid black 1pt;vertical-align: text-top;">
          3.Did the applicant understand the subject matter?
        </td>
      </tr>
      <tr>
        <td align="top"style="padding-left: 30px;border-bottom:solid black 1pt;border-left:solid black 1pt;border-right:solid black 1pt; height: 130px;vertical-align: text-top;">Comments:</td>
      </tr>
    </table>

    <table>
      <tr>
        <td style="padding: 7px;">
          <strong>Part C: Evaluation of Presentation</strong>
        </td>
      </tr>
    </table>

    <table>
      <tr>
        <td style="padding: 7px;border-top:solid black 1pt;border-left:solid black 1pt;border-right:solid black 1pt;">
          1. Presentation
        </td>
      </tr>
      <tr style="padding: 7px;border-left:solid black 1pt;border-right:solid black 1pt;">
        <td>
          <table style="padding: 5px;">
            <tr style="padding: 7px;border:solid black 1pt;">
              <td style="width: 33.33%">
                <input type="checkbox" value="1">
                <label>Presentation unacceptable</label>
              </td>
              <td style="width: 33.33%">
                <input type="checkbox" value="2">
                <label>Presentation acceptable</label>
              </td>
              <td style="width: 33.33%">
                <input type="checkbox" value="3">
                <label>Presentation outstanding</label>
              </td>
            </tr>
            <tr style="padding: 7px;border:solid black 1pt;">
              <td style="width: 33.33%">
                <input type="checkbox" value="1">
                <label>The presentation does not reflect well developed critical thinking skills</label>
              </td>
              <td style="width: 33.33%">
                <input type="checkbox" value="2">
                <label>The presentation reveals above average critical thinking skills</label>
              </td>
              <td style="width: 33.33%">
                <input type="checkbox" value="3">
                <label>The presentation reveals well developed critical thinking skills</label>
              </td>
            </tr>
            <tr style="padding: 7px;border:solid black 1pt;">
              <td style="width: 33.33%">
                <input type="checkbox" value="1">
                <label>The presentation reveals critical weaknesses in-depth of knowledge in the subject matter</label>
              </td>
              <td style="width: 33.33%">
                <input type="checkbox" value="2">
                <label>The presentation reveals some depth of knowledge in the subject matter</label>
              </td>
              <td style="width: 33.33%">
                <input type="checkbox" value="3">
                <label>The presentation reveals an exceptional depth of subject knowledge</label>
              </td>
            </tr>
            <tr style="padding: 7px;border:solid black 1pt;">
              <td style="width: 33.33%">
                <input type="checkbox" value="1">
                <label>Responses to questions are incomplete</label>
              </td>
              <td style="width: 33.33%">
                <input type="checkbox" value="2">
                <label>Responses to questions are partially complete and require assistance</label>
              </td>
              <td style="width: 33.33%">
                <input type="checkbox" value="3">
                <label>Responses are complete</label>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr >
        <td align="top"style="padding-left: 30px;border-bottom:solid black 1pt;border-left:solid black 1pt;border-right:solid black 1pt; height: 130px;vertical-align: text-top;">Comments:</td>
      </tr>
    </table>

    <table style="page-break-before: always;border-spacing: 7px;border-collapse: none;">
      <tr>
        <td colspan="2">
          <p style="text-align: justify;">We, the Panel of the Rigorous Assessment for the applicant named in Part A, hereby confirmed that the evaluation was conducted and the above is the agreed report. We do *recommend/not recommend that the applicant is suitable to undertake the postgraduate by research program in the faculty.
          </p>
          <p>
            <i>*Please strike out whichever that is NOT applicable</i>
          </p>
        </td>
      </tr>
      <tr>
        <td>
          <p>
            <strong>Chairperson</strong>
          </p>
        </td>
      </tr>
      <tr>
        <td style="border-bottom:solid black 0.5pt;height: 40px;"></td>
      </tr>
      <tr>
        <td>
          <p>Name: {{$session->chairperson->profile->name}}</p><br>
          <p>Date:</p>
        </td>
      </tr>
      <tr>
        <td>
          <p>
            <strong>Panel Member 1</strong>
          </p>
        </td>
        <td>
          <p>
            <strong>Panel Member 2</strong>
          </p>
        </td>
      </tr>
      <tr>
        <td style="border-bottom:solid black 0.5pt;height: 40px;width: 50%;"></td>
        <td style="border-bottom:solid black 0.5pt;height: 40px;width: 50%"></td>
      </tr>
      <tr>
        <td style="width: 50%">
          <p>Name: {{$session->examiner1->profile->name}}</p><br>
          <p>Date:</p>
        </td>
        <td style="width: 50%">
          <p>Name: {{$session->examiner2->profile->name}}</p><br>
          <p>Date:</p>
        </td>
      </tr>
      <tr>
        <td colspan="2" style="height: 30px;"></td>
      </tr>
      <tr>
        <td colspan="2" style="border-top:solid black 0.5pt;">
          <p>
            <strong>Part D: For Office Purpose Only (Dean Office)</strong>
          </p>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <p>
            Endorsed by:
          </p>
        </td>
      </tr>
      <tr>
        <td style="border-bottom:solid black 0.5pt;height: 40px;"></td>
      </tr>
      <tr>
        <td>
          <p>Name:</p><br>
          <p>Date:</p>
        </td>
      </tr>
    </table>
  </body>
</html>
