<!DOCTYPE html>
<html>
<head>
  <style>
  table {
    border-collapse: collapse;
    width:100%;
  }
  @page {
    margin-left: 0.75inch;
    margin-right: 0.75inch;
  }
  </style>
</head>

<body>

<table style="padding-top: 10px;">
  <tr>
    <td style="padding: 10px;width:100px;">
      <img src="assets/img/unimas001.jpg" alt="logo" style="width:100px;">
    </td>
    <td style="padding: 10px;">
      Centre for Graduate Studies<br><br>
      <strong>UNIVERSITI MALAYSIA SARAWAK</strong><br><br>
      94300 Kota Samarahan<br>
      Sarawak<br>
      MALAYSIA
    </td>
  </tr>
  <tr>
    <td colspan="2" style="padding:10px;border-bottom:solid black 2.0pt;border-top:solid black 2.0pt;text-align: center;font-size:12.0pt:">
      <strong>PROPOSAL DEFENCE EVALUATION</strong>
    </td>
  </tr>
</table>

<table style="padding-top: 10px;padding-bottom: 30px;">
  <tr>
    <td style="padding-top: 10px;padding-bottom: 10px;">STUDENT NAME</td>
    <td style="padding-top: 10px;padding-bottom: 10px;border-bottom:solid black 0.5pt">
      : <strong>{{ $session->student->profile->name}}</strong>
    </td>
  </tr>
  <tr>
    <td style="padding-top: 10px;padding-bottom: 10px;">MATRIC NO</td>
    <td style="padding-top: 10px;padding-bottom: 10px;border-bottom:solid black 0.5pt">
      : <strong>{{ $session->student->profile->user->username}}</strong>
    </td>
  </tr>
  <tr>
    <td style="padding-top: 10px;padding-bottom: 10px;">RESEARCH TITLE</td>
    <td style="padding-top: 10px;padding-bottom: 10px;border-bottom:solid black 0.5pt">
      : <strong>{{ $session->proposal_title }}</strong>
    </td>
  </tr>
  <tr>
    <td style="padding-top: 10px;padding-bottom: 10px;">SUPERVISOR NAME</td>
    <td style="padding-top: 10px;padding-bottom: 10px;border-bottom:solid black 0.5pt">
      : <strong>{{ $session->student->supervisor->profile->name}}</strong>
    </td>
  </tr>
  <tr>
    <td style="padding-top: 10px;padding-bottom: 10px;">FACULTY</td>
    <td style="padding-top: 10px;padding-bottom: 10px;border-bottom:solid black 0.5pt">
      : <strong>Faculty of Computer Science and Information Technology</strong>
    </td>
  </tr>
</table>

<table>
  <tr>
    <td width=601 colspan=8 valign=top style='width:450.65pt;border:solid black 1.0pt;height:25.75pt'>
      <p class=TableParagraph style='margin-top:5.95pt;margin-left:23.25pt;margin-bottom:.0001pt'>
        <b><span style='font-size:12.0pt'>A. INTRODUCTION</span></b>
      </p>
    </td>
  </tr>
  <tr style='height:13.75pt'>
    <td width=81 colspan=2 valign=top style='width:60.6pt;border:solid black 1.0pt; height:13.75pt'>
      <p class=TableParagraph style='margin-left:5.35pt;line-height:12.8pt'>
        <span style='font-size:12.0pt'>Indicators</span>
      </p>
    </td>
    <td width=364 valign=top style='width:273.15pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:13.75pt'>
      <p class=TableParagraph><span style='font-size:10.0pt'></span></p>
    </td>
    @for ($i = 5; $i >= 1; $i--)
    <td width=31 valign=top style='width:23.35pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:13.75pt'>
      <p class=TableParagraph align=center style='margin-left:.2pt;text-align:center;line-height:12.8pt'>
        <span style='font-size:12.0pt'>{{$i}}</span>
      </p>
    </td>
    @endfor
  </tr>
  <tr style='height:33.55pt'>
    <td width=37 rowspan=6 valign=top style='width:28.1pt;border:solid black 1.0pt;
    border-top:none;padding:0cm 0cm 0cm 0cm;height:33.55pt'>
    <p class=TableParagraph><span lang=EN-US>&nbsp;</span></p>
    </td>
    <td width=43 valign=top style='width:32.4pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
        <span style='font-size:12.0pt'>1.</span>
      </p>
    </td>
    <td width=364 valign=top style='width:273.15pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
      </span>The introduction consists of an adequate introductory discussion of the problem</span>
      </p>
    </td>
    @for ($i = 5; $i >= 1; $i--)
    <td width=31 valign=top style='width:23.35pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:13.75pt'>
      <p class=TableParagraph align=center style='margin-left:.2pt;text-align:center;line-height:12.8pt'>
        <span style='font-size:12.0pt'>
        </span>
      </p>
    </td>
    @endfor
 </tr>
 <tr style='height:33.55pt'>
    <td width=43 valign=top style='width:32.4pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
        <span style='font-size:12.0pt'>2.</span>
      </p>
    </td>
    <td width=364 valign=top style='width:273.15pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
      </span>The problem statement is clearly explained</span>
      </p>
    </td>
    @for ($i = 5; $i >= 1; $i--)
    <td width=31 valign=top style='width:23.35pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:13.75pt'>
      <p class=TableParagraph align=center style='margin-left:.2pt;text-align:center;line-height:12.8pt'>
        <span style='font-size:12.0pt'>
        </span>
      </p>
    </td>
    @endfor
  </tr>
 <tr style='height:33.55pt'>
    <td width=43 valign=top style='width:32.4pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
        <span style='font-size:12.0pt'>3.</span>
      </p>
    </td>
    <td width=364 valign=top style='width:273.15pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
      </span>The Literature Review is comprehensively done and only stated research works relevant to the study</span>
      </p>
    </td>
    @for ($i = 5; $i >= 1; $i--)
    <td width=31 valign=top style='width:23.35pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:13.75pt'>
      <p class=TableParagraph align=center style='margin-left:.2pt;text-align:center;line-height:12.8pt'>
        <span style='font-size:12.0pt'>
        </span>
      </p>
    </td>
    @endfor
 </tr>
 <tr style='height:33.55pt'>
    <td width=43 valign=top style='width:32.4pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
        <span style='font-size:12.0pt'>4.</span>
      </p>
    </td>
    <td width=364 valign=top style='width:273.15pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
      </span>The knowledge gap of the study is clearly and specifically stated to justify the need to conduct such study</span>
      </p>
    </td>
    @for ($i = 5; $i >= 1; $i--)
    <td width=31 valign=top style='width:23.35pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:13.75pt'>
      <p class=TableParagraph align=center style='margin-left:.2pt;text-align:center;line-height:12.8pt'>
        <span style='font-size:12.0pt'>
        </span>
      </p>
    </td>
    @endfor
 </tr>
 <tr style='height:33.55pt'>
    <td width=43 valign=top style='width:32.4pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
        <span style='font-size:12.0pt'>5.</span>
      </p>
    </td>
    <td width=364 valign=top style='width:273.15pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
      </span>The aims/ purposes or objectives were thoroughly presented</span>
      </p>
    </td>
    @for ($i = 5; $i >= 1; $i--)
    <td width=31 valign=top style='width:23.35pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:13.75pt'>
      <p class=TableParagraph align=center style='margin-left:.2pt;text-align:center;line-height:12.8pt'>
        <span style='font-size:12.0pt'>
        </span>
      </p>
    </td>
    @endfor
  </tr>
  <tr style='height:41.35pt'>
    <td width=43 valign=top style='width:32.4pt; border-bottom:solid black 1.0pt;border-right:solid black 1.0pt; height:41.35pt'>
      <p class=TableParagraph><span>&nbsp;</span></p>
    </td>
    <td width=364 valign=top style='width:273.15pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:41.35pt'>
      <p class=TableParagraph style='margin-top:.5pt'>
        <span style='font-size:11.5pt'>&nbsp;</span>
      </p>
      <p class=TableParagraph style='margin-top:.05pt;margin-left:174.25pt;margin-bottom:.0001pt'>
        <b><span style='font-size:12.0pt'>PART A:TOTAL</span></b>
      </p>
    </td>
    <td width=156 colspan=5 valign=top style='width:116.9pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:41.35pt'>
      <p class=TableParagraph style='margin-top:.5pt'>
        <span style='font-size:11.5pt'>&nbsp;</span>
      </p>
      <p class=TableParagraph align=right style='margin-top:.05pt;margin-right:4.65pt;margin-left:0cm;margin-bottom:.0001pt;text-align: right'>
        <span style='font-size:12.0pt'>  /25</span>
      </p>
    </td>
  </tr>
</table>

<table style="page-break-before: always;">
  <tr>
    <td width=601 colspan=8 valign=top style='width:450.65pt;border:solid black 1.0pt;height:25.75pt'>
      <p class=TableParagraph style='margin-top:5.95pt;margin-left:23.25pt;margin-bottom:.0001pt'>
        <b><span style='font-size:12.0pt'>B. LITERATURE REVIEW AND CONCEPTUAL FRAMEWORK</span></b>
      </p>
    </td>
  </tr>
  <tr style='height:13.85pt'>
    <td width=81 colspan=2 valign=top style='width:60.6pt;border:solid black 1.0pt; height:13.75pt'>
      <p class=TableParagraph style='margin-left:5.35pt;line-height:12.8pt'>
        <span style='font-size:12.0pt'>Indicators</span>
      </p>
    </td>
    <td width=364 valign=top style='width:273.15pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:13.75pt'>
      <p class=TableParagraph><span style='font-size:10.0pt'></span></p>
    </td>
    @for ($i = 5; $i >= 1; $i--)
    <td width=31 valign=top style='width:23.35pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:13.75pt'>
      <p class=TableParagraph align=center style='margin-left:.2pt;text-align:center;line-height:12.8pt'>
        <span style='font-size:12.0pt'>{{$i}}</span>
      </p>
    </td>
    @endfor
  </tr>
  <tr style='height:33.55pt'>
    <td width=37 rowspan=8 valign=top style='width:28.1pt;border:solid black 1.0pt;
    border-top:none;padding:0cm 0cm 0cm 0cm;height:33.55pt'>
    <p class=TableParagraph><span lang=EN-US>&nbsp;</span></p>
    </td>
    <td width=43 valign=top style='width:32.4pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
        <span style='font-size:12.0pt'>1.</span>
      </p>
    </td>
    <td width=364 valign=top style='width:273.15pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
      </span>Cited literature and studies are adequate and relevant to the research problem</span>
      </p>
    </td>
    @for ($i = 5; $i >= 1; $i--)
    <td width=31 valign=top style='width:23.35pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:13.75pt'>
      <p class=TableParagraph align=center style='margin-left:.2pt;text-align:center;line-height:12.8pt'>
        <span style='font-size:12.0pt'>
        </span>
      </p>
    </td>
    @endfor
  </tr>
  <tr style='height:33.55pt'>
    <td width=43 valign=top style='width:32.4pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
        <span style='font-size:12.0pt'>2.</span>
      </p>
    </td>
    <td width=364 valign=top style='width:273.15pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
      </span>Related literature and studies are recent (five years ago to present year of the study)</span>
      </p>
    </td>
    @for ($i = 5; $i >= 1; $i--)
    <td width=31 valign=top style='width:23.35pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:13.75pt'>
      <p class=TableParagraph align=center style='margin-left:.2pt;text-align:center;line-height:12.8pt'>
        <span style='font-size:12.0pt'>
        </span>
      </p>
    </td>
    @endfor
  </tr>
  <tr style='height:33.55pt'>
    <td width=43 valign=top style='width:32.4pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
        <span style='font-size:12.0pt'>3.</span>
      </p>
    </td>
    <td width=364 valign=top style='width:273.15pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
      </span>Foreign literature, studies, literature and local studies are present</span>
      </p>
    </td>
    @for ($i = 5; $i >= 1; $i--)
    <td width=31 valign=top style='width:23.35pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:13.75pt'>
      <p class=TableParagraph align=center style='margin-left:.2pt;text-align:center;line-height:12.8pt'>
        <span style='font-size:12.0pt'>
        </span>
      </p>
    </td>
    @endfor
  </tr>
  <tr style='height:33.55pt'>
    <td width=43 valign=top style='width:32.4pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
        <span style='font-size:12.0pt'>4.</span>
      </p>
    </td>
    <td width=364 valign=top style='width:273.15pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
      </span>Synthesis of the reviewed literature and studies is well-organized, concise (not too long nor too short) and is based on the students’ logical analysis of the cited materials</span>
      </p>
    </td>
    @for ($i = 5; $i >= 1; $i--)
    <td width=31 valign=top style='width:23.35pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:13.75pt'>
      <p class=TableParagraph align=center style='margin-left:.2pt;text-align:center;line-height:12.8pt'>
        <span style='font-size:12.0pt'>
        </span>
      </p>
    </td>
    @endfor
  </tr>
  <tr style='height:33.55pt'>
    <td width=43 valign=top style='width:32.4pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
        <span style='font-size:12.0pt'>5.</span>
      </p>
    </td>
    <td width=364 valign=top style='width:273.15pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
      </span>The sources of the cited literatures and studies are appropriately acknowledged and or credited</span>
      </p>
    </td>
    @for ($i = 5; $i >= 1; $i--)
    <td width=31 valign=top style='width:23.35pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:13.75pt'>
      <p class=TableParagraph align=center style='margin-left:.2pt;text-align:center;line-height:12.8pt'>
        <span style='font-size:12.0pt'>
        </span>
      </p>
    </td>
    @endfor
  </tr>
  <tr style='height:33.55pt'>
    <td width=43 valign=top style='width:32.4pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
        <span style='font-size:12.0pt'>6.</span>
      </p>
    </td>
    <td width=364 valign=top style='width:273.15pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
      </span>The student is able to determine the variables of the study from the theory presented</span>
      </p>
    </td>
    @for ($i = 5; $i >= 1; $i--)
    <td width=31 valign=top style='width:23.35pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:13.75pt'>
      <p class=TableParagraph align=center style='margin-left:.2pt;text-align:center;line-height:12.8pt'>
        <span style='font-size:12.0pt'>
        </span>
      </p>
    </td>
    @endfor
  </tr>
  <tr style='height:33.55pt'>
    <td width=43 valign=top style='width:32.4pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
        <span style='font-size:12.0pt'>7.</span>
      </p>
    </td>
    <td width=364 valign=top style='width:273.15pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
      </span>The framework presented conceptualizes the concepts of the theory appropriately</span>
      </p>
    </td>
    @for ($i = 5; $i >= 1; $i--)
    <td width=31 valign=top style='width:23.35pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:13.75pt'>
      <p class=TableParagraph align=center style='margin-left:.2pt;text-align:center;line-height:12.8pt'>
        <span style='font-size:12.0pt'>
        </span>
      </p>
    </td>
    @endfor
  </tr>
  <tr style='height:41.35pt'>
    <td width=43 valign=top style='width:32.4pt; border-bottom:solid black 1.0pt;border-right:solid black 1.0pt; height:41.35pt'>
      <p class=TableParagraph><span>&nbsp;</span></p>
    </td>
    <td width=364 valign=top style='width:273.15pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:41.35pt'>
      <p class=TableParagraph style='margin-top:.5pt'>
        <span style='font-size:11.5pt'>&nbsp;</span>
      </p>
      <p class=TableParagraph style='margin-top:.05pt;margin-left:174.25pt;margin-bottom:.0001pt'>
        <b><span style='font-size:12.0pt'>PART B:TOTAL</span></b>
      </p>
    </td>
    <td width=156 colspan=5 valign=top style='width:116.9pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:41.35pt'>
      <p class=TableParagraph style='margin-top:.5pt'>
        <span style='font-size:11.5pt'>&nbsp;</span>
      </p>
      <p class=TableParagraph align=right style='margin-top:.05pt;margin-right:4.65pt;margin-left:0cm;margin-bottom:.0001pt;text-align: right'>
        <span style='font-size:12.0pt'>  /35</span>
      </p>
    </td>
  </tr>
</table>

<br>

<table>
  <tr>
    <td width=601 colspan=8 valign=top style='width:450.65pt;border:solid black 1.0pt;height:25.75pt'>
      <p class=TableParagraph style='margin-top:5.95pt;margin-left:23.25pt;margin-bottom:.0001pt'>
        <b><span style='font-size:12.0pt'>C. RESEARCH DESIGN AND METHOD</span></b>
      </p>
    </td>
  </tr>
  <tr style='height:13.75pt'>
    <td width=81 colspan=2 valign=top style='width:60.6pt;border:solid black 1.0pt; height:13.75pt'>
      <p class=TableParagraph style='margin-left:5.35pt;line-height:12.8pt'>
        <span style='font-size:12.0pt'>Indicators</span>
      </p>
    </td>
    <td width=364 valign=top style='width:273.15pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:13.75pt'>
      <p class=TableParagraph><span style='font-size:10.0pt'></span></p>
    </td>
    @for ($i = 5; $i >= 1; $i--)
    <td width=31 valign=top style='width:23.35pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:13.75pt'>
      <p class=TableParagraph align=center style='margin-left:.2pt;text-align:center;line-height:12.8pt'>
        <span style='font-size:12.0pt'>{{$i}}</span>
      </p>
    </td>
    @endfor
  </tr>
  <tr style='height:33.6pt'>
    <td width=38 rowspan=6 valign=top style='width:28.2pt;border:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph><span></span></p>
    </td>
    <td width=43 valign=top style='width:32.4pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
        <span style='font-size:12.0pt'>1.</span>
      </p>
    </td>
    <td width=364 valign=top style='width:273.15pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
      </span>The research methodology is well-described and is suitable or fitting to the research problem</span>
      </p>
    </td>
    @for ($i = 5; $i >= 1; $i--)
    <td width=31 valign=top style='width:23.35pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:13.75pt'>
      <p class=TableParagraph align=center style='margin-left:.2pt;text-align:center;line-height:12.8pt'>
        <span style='font-size:12.0pt'>
        </span>
      </p>
    </td>
    @endfor
  </tr>
  <tr style='height:19.75pt'>
    <td width=43 valign=top style='width:32.4pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
        <span style='font-size:12.0pt'>2.</span>
      </p>
    </td>
    <td width=364 valign=top style='width:273.15pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:19.75pt'>
      <p class=TableParagraph style='margin-left:5.35pt;line-height:13.75pt'>
        </span>The procedure and or techniques of experiment/gathering data are explained in complete detail</span>
      </p>
    </td>
    @for ($i = 5; $i >= 1; $i--)
    <td width=31 valign=top style='width:23.35pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:13.75pt'>
      <p class=TableParagraph align=center style='margin-left:.2pt;text-align:center;line-height:12.8pt'>
        <span style='font-size:12.0pt'>
        </span>
      </p>
    </td>
    @endfor
  </tr>
  <tr style='height:33.6pt'>
    <td width=43 valign=top style='width:32.4pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
        <span style='font-size:12.0pt'>3.</span>
      </p>
    </td>
    <td width=364 valign=top style='width:273.15pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
      </span>The research design and method employed are correct and relevant to the fulfillment of the accurate results of the study</span>
      </p>
    </td>
    @for ($i = 5; $i >= 1; $i--)
    <td width=31 valign=top style='width:23.35pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:13.75pt'>
      <p class=TableParagraph align=center style='margin-left:.2pt;text-align:center;line-height:12.8pt'>
        <span style='font-size:12.0pt'>
        </span>
      </p>
    </td>
    @endfor
  </tr>
  <tr style='height:33.6pt'>
    <td width=43 valign=top style='width:32.4pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
        <span style='font-size:12.0pt'>4.</span>
      </p>
    </td>
    <td width=364 valign=top style='width:273.15pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
      </span>The research instrument is presented and discussed in terms of its validity and reliability</span>
      </p>
    </td>
    @for ($i = 5; $i >= 1; $i--)
    <td width=31 valign=top style='width:23.35pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:13.75pt'>
      <p class=TableParagraph align=center style='margin-left:.2pt;text-align:center;line-height:12.8pt'>
        <span style='font-size:12.0pt'>
        </span>
      </p>
    </td>
    @endfor
  </tr>
  <tr style='height:33.6pt'>
    <td width=43 valign=top style='width:32.4pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
        <span style='font-size:12.0pt'>5.</span>
      </p>
    </td>
    <td width=364 valign=top style='width:273.15pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
      </span>Analysis techniques are well explained and presented</span>
      </p>
    </td>
    @for ($i = 5; $i >= 1; $i--)
    <td width=31 valign=top style='width:23.35pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:13.75pt'>
      <p class=TableParagraph align=center style='margin-left:.2pt;text-align:center;line-height:12.8pt'>
        <span style='font-size:12.0pt'>
        </span>
      </p>
    </td>
    @endfor
  </tr>
  <tr style='height:41.35pt'>
    <td width=43 valign=top style='width:32.4pt; border-bottom:solid black 1.0pt;border-right:solid black 1.0pt; height:41.35pt'>
      <p class=TableParagraph><span>&nbsp;</span></p>
    </td>
    <td width=364 valign=top style='width:273.15pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:41.35pt'>
      <p class=TableParagraph style='margin-top:.5pt'>
        <span style='font-size:11.5pt'>&nbsp;</span>
      </p>
      <p class=TableParagraph style='margin-top:.05pt;margin-left:174.25pt;margin-bottom:.0001pt'>
        <b><span style='font-size:12.0pt'>PART C:TOTAL</span></b>
      </p>
    </td>
    <td width=156 colspan=5 valign=top style='width:116.9pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:41.35pt'>
      <p class=TableParagraph style='margin-top:.5pt'>
        <span style='font-size:11.5pt'>&nbsp;</span>
      </p>
      <p class=TableParagraph align=right style='margin-top:.05pt;margin-right:4.65pt;margin-left:0cm;margin-bottom:.0001pt;text-align: right'>
        <span style='font-size:12.0pt'>  /25</span>
      </p>
    </td>
  </tr>
</table>

<table style="page-break-before: always;">
  <tr>
    <td width=601 colspan=8 valign=top style='width:450.65pt;border:solid black 1.0pt;height:25.75pt'>
      <p class=TableParagraph style='margin-top:5.95pt;margin-left:23.25pt;margin-bottom:.0001pt'>
        <b><span style='font-size:12.0pt'>D. OTHERS</span></b>
      </p>
    </td>
  </tr>
  <tr style='height:13.75pt'>
    <td width=81 colspan=2 valign=top style='width:60.6pt;border:solid black 1.0pt; height:13.75pt'>
      <p class=TableParagraph style='margin-left:5.35pt;line-height:12.8pt'>
        <span style='font-size:12.0pt'>Indicators</span>
      </p>
    </td>
    <td width=364 valign=top style='width:273.15pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:13.75pt'>
      <p class=TableParagraph><span style='font-size:10.0pt'></span></p>
    </td>
    @for ($i = 5; $i >= 1; $i--)
    <td width=31 valign=top style='width:23.35pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:13.75pt'>
      <p class=TableParagraph align=center style='margin-left:.2pt;text-align:center;line-height:12.8pt'>
        <span style='font-size:12.0pt'>{{$i}}</span>
      </p>
    </td>
    @endfor
  </tr>
  <tr style='height:33.55pt'>
    <td width=37 rowspan=4 valign=top style='width:28.1pt;border:solid black 1.0pt;
    border-top:none;padding:0cm 0cm 0cm 0cm;height:33.55pt'>
    <p class=TableParagraph><span lang=EN-US>&nbsp;</span></p>
    </td>
    <td width=43 valign=top style='width:32.4pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
        <span style='font-size:12.0pt'>1.</span>
      </p>
    </td>
    <td width=364 valign=top style='width:273.15pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
      </span>Originality</span>
      </p>
    </td>
    @for ($i = 5; $i >= 1; $i--)
    <td width=31 valign=top style='width:23.35pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:13.75pt'>
      <p class=TableParagraph align=center style='margin-left:.2pt;text-align:center;line-height:12.8pt'>
        <span style='font-size:12.0pt'>
        </span>
      </p>
    </td>
    @endfor
  </tr>
  <tr style='height:33.55pt'>
    <td width=43 valign=top style='width:32.4pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
        <span style='font-size:12.0pt'>2.</span>
      </p>
    </td>
    <td width=364 valign=top style='width:273.15pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
      </span>Presentation</span>
      </p>
    </td>
    @for ($i = 5; $i >= 1; $i--)
    <td width=31 valign=top style='width:23.35pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:13.75pt'>
      <p class=TableParagraph align=center style='margin-left:.2pt;text-align:center;line-height:12.8pt'>
        <span style='font-size:12.0pt'>
        </span>
      </p>
    </td>
    @endfor
  </tr>
  <tr style='height:33.55pt'>
    <td width=43 valign=top style='width:32.4pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
        <span style='font-size:12.0pt'>3.</span>
      </p>
    </td>
    <td width=364 valign=top style='width:273.15pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:33.6pt'>
      <p class=TableParagraph style='margin-top:0cm;margin-right:12.55pt;margin-left:5.35pt;margin-bottom:.0001pt'>
      </span>Commitment</span>
      </p>
    </td>
    @for ($i = 5; $i >= 1; $i--)
    <td width=31 valign=top style='width:23.35pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:13.75pt'>
      <p class=TableParagraph align=center style='margin-left:.2pt;text-align:center;line-height:12.8pt'>
        <span style='font-size:12.0pt'>
        </span>
      </p>
    </td>
    @endfor
  </tr>
  <tr style='height:41.35pt'>
    <td width=43 valign=top style='width:32.4pt; border-bottom:solid black 1.0pt;border-right:solid black 1.0pt; height:41.35pt'>
      <p class=TableParagraph><span>&nbsp;</span></p>
    </td>
    <td width=364 valign=top style='width:273.15pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:41.35pt'>
      <p class=TableParagraph style='margin-top:.5pt'>
        <span style='font-size:11.5pt'>&nbsp;</span>
      </p>
      <p class=TableParagraph style='margin-top:.05pt;margin-left:174.25pt;margin-bottom:.0001pt'>
        <b><span style='font-size:12.0pt'>PART D:TOTAL</span></b>
      </p>
    </td>
    <td width=156 colspan=5 valign=top style='width:116.9pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;height:41.35pt'>
      <p class=TableParagraph style='margin-top:.5pt'>
        <span style='font-size:11.5pt'>&nbsp;</span>
      </p>
      <p class=TableParagraph align=right style='margin-top:.05pt;margin-right:4.65pt;margin-left:0cm;margin-bottom:.0001pt;text-align: right'>
        <span style='font-size:12.0pt'>  /15</span>
      </p>
    </td>
  </tr>
</table>

<br>

<table style="padding-top: 10px;border:solid black 1pt">
  <tr>
    <td style="padding: 20px;border:solid black 1pt;width:60%;">
      <strong>
        OVERALL MARK:<br><br>
        (PART A + PART B + PART C + PART D)
      </strong>
    </td>
    <td style="padding: 20px;border:solid black 1pt;width:40%;text-align: center;">
      <strong>  /100</strong>
    </td>
  </tr>
</table>

<br>

<table style="padding-top: 10px;">
  <tr>
    <td style="padding:10px;font-size:12.0pt:">
      <strong>EVALUATOR:</strong>
    </td>
  </tr>
  <tr>
    <td></td>
    <td style="padding-top: 10px;padding-bottom: 10px;">
      <strong>SIGNATURE</strong>
    </td>
    <td style="padding: 20px;">:</td>
    <td style="padding: 20px;border-bottom:solid black 0.5pt;width:100%"></td>
  </tr>
  <tr>
    <td></td>
    <td style="padding-top: 10px;padding-bottom: 10px;">
      <strong>NAME</strong>
    </td>
    <td style="padding: 20px;">:</td>
    <td style="padding: 20px;border-bottom:solid black 0.5pt;width:100%">
      <strong>{{Auth::user()->profile->name }}</strong>
    </td>
  </tr>
  <tr>
    <td></td>
    <td style="padding-top: 15px;padding-bottom: 15px;">
      <strong>DATE</strong>
    </td>
    <td style="padding: 20px;">:</td>
    <td style="padding: 20px;border-bottom:solid black 0.5pt;width:100%"></td>
  </tr>
</table>

</body>
</html>
