<?php
include("connection.php");

$xml="<chart bgColor='E1F5FF'>
<annotations>
<annotationGroup id='Grp1' >
<annotation type='rectangle' x='30' y='100' toXPos='110' toYPos='220' radius='5' color='453269' />
<annotation type='rectangle' x='235' y='100' toXPos='315' toYPos='220' radius='5' color='453269' />
<annotation type='rectangle' x='440' y='100' toXPos='520' toYPos='220' radius='5' color='453269' />

</annotationGroup>
<annotationGroup id='Grp2' >
<annotation type='text' x='70' y='155' fontSize='12' isBold='1' label='Employee' color='FFFFFF'/>
<annotation type='text' x='275' y='155' fontSize='10' isBold='1' label='     Theme\n Coordinator' color='FFFFFF'/>
<annotation type='text' x='480' y='155' fontSize='12' isBold='1' label='Reviewers' color='FFFFFF'/>

</annotationGroup>
<annotationGroup id='Grp3' >
<annotation type='text' x='70' y='65' label='1. Theme is created and due date set for submission of ideas' wrap='1' wrapWidth='100' color='453269'/>
<annotation type='text' x='170' y='125' label='2. Theme creator becomes the theme-coordinator' wrap='1' wrapWidth='100' color='453269'/>
<annotation type='text' x='380' y='130' label='3. A default review team is assigned and can be modified later' wrap='1' wrapWidth='100' color='453269'/>
<annotation type='text' x='380' y='210' label='4. Reviewers rate submitted ideas and a calculated average rating is marked for a particular idea' wrap='1' wrapWidth='100' color='453269'/>
<annotation type='text' x='275' y='255' label='5. The Coordinator can short-close a theme if it has sufficient ideas' wrap='1' wrapWidth='100' color='453269'/>
<annotation type='text' x='170' y='235' label='6. Feedback is added, reports can be generated and there can be a conversion into projects on the basis of submitted ideas' wrap='1' wrapWidth='100' color='453269'/>
<annotation type='text' x='70' y='260' label='7. There is a follow-up of each theme, citing conclusions and impact of idea generation' wrap='1' wrapWidth='100' color='453269'/>
</annotationGroup>
<annotationGroup id='Grp4'>
<!--arrow for process 2-->
<annotation type='line' x='120' y='160' toX='220' color='453269' />
<annotation type='line' x='215' y='155' toX='220' toY='160' color='453269' />
<annotation type='line' x='215' y='165' toX='220' toY='160' color='453269' />

<!--arrow for process 6-->
<annotation type='line' x='120' y='175' toX='220' color='453269' />
<annotation type='line' x='125' y='170' toX='120' toY='175' color='453269' />
<annotation type='line' x='125' y='180' toX='120' toY='175' color='453269' />

<!--arrow for process 3-->
<annotation type='line' x='325' y='155' toX='435' color='453269' />
<annotation type='line' x='430' y='150' toX='435' toY='155' color='453269' />
<annotation type='line' x='430' y='160' toX='435' toY='155' color='453269' />

<!--arrow for process 4-->
<annotation type='line' x='325' y='170' toX='435' color='453269' />
<annotation type='line' x='330' y='165' toX='325' toY='170' color='453269' />
<annotation type='line' x='330' y='175' toX='325' toY='170' color='453269' />

</annotationGroup>
<annotationGroup id='Grp5'>
<annotation type='text' label='Idea Generation Process' fontSize='16' fontColor='666666' isBold='1' x='270' y='20'/>
</annotationGroup>
</annotations>
<styles>
<definition>
<style name='Shadow1' type='shadow' distance='7'/>
<style name='Shadow2' type='shadow' strength='3'/>
<style name='Shadow3' type='shadow' alpha='0'/>
<style name='Anim1' type='animation' param='_x' start='-50' wait='0' duration='1' easing='Bounce'/>
<style name='Anim2' type='animation' param='_y' start='-30' wait='1' duration='1' easing='Bounce'/>
<style name='Anim3' type='animation' param='_xScale' start='0' end='100' wait='2' duration='0.5'/>
<style name='Anim4' type='animation' param='_alpha' start='0' wait='2' duration='1'/>
<style name='Anim5' type='animation' param='_y' start='-50' wait='2' duration='1'/>

</definition>

<application>
<apply toObject='Grp1' styles='Shadow1, Anim1'/>
<apply toObject='Grp2' styles='Shadow2, Anim2'/>
<apply toObject='Grp3' styles='Shadow3,Anim5'/>
<apply toObject='Grp4' styles='Anim3, Anim4'/>
</application>
</styles>
</chart>";

header('Content-Type: text/xml');
print $xml;
?>