 <?php
    $faqs = [
        'What is International Direct Dialing (IDD)?' => 'IDD allows you to make direct international calls to mobile and landline numbers without using the internet from your Comium line.',
        'Who can use IDD?' => 'Both prepaid and postpaid COMIUM customers can use the IDD service.',
        'How can I check IDD rates?' => 'You can visit our website or call the helpline on 111 from Gambia. If you are outside of Gambia, dial +2206601111.',
        'Who Do I Contact If I have an IDD issue while abroad?' => '<ol><li>Call COMIUM help line</li><li>Submit a complaint through COMIUM website.</li><li>Visit COMIUM Showroom</li></ol>'
    ];
    ?>
 <h3 class="red-title">FAQs & Troubleshooting</h3>


 <div class="faqs">

     <?php foreach ($faqs as $question => $answer): ?>
         <!-- FAQ Item -->
         <div class="faq">
             <div class="faq-question">
                 <span><?= $question ?></span>
                 <svg class="faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                 </svg>
             </div>
             <div class="faq-answer">
                 <div>
                     <?= $answer ?>
                 </div>
             </div>
         </div>
     <?php endforeach; ?>

 </div>