

<p align="center">
<img src="https://media4.giphy.com/media/v1.Y2lkPTc5MGI3NjExczFtNWlvMXJ3aWJ6dDJzNXBpZTI1cDUxMWl6cmk0cGptbTdmdmx1OCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/l41lGnxllmN3YqOyI/giphy.gif", width="300", height="300">
</p>

<h1 align="center">DEDSEC_PHISH</h1>
<h4 align="center">DEDSEC_PHISH is a RealWorld Phishing Attack Simulation Tool designed for ethical hacking and security testing purposes. It is equipped with advanced features to replicate real-world scenarios, including support for OTP (One-Time Password) data.</h4>

### DESCRIPTION
This tool is designed to simulate real-world phishing attacks for educational purposes, focusing on providing a comprehensive phishing attack simulation that includes OTP (One-Time Password) support. The tool simulates the most common forms of phishing, such as fake login pages and attempts to harvest sensitive information like usernames, passwords, and OTPs.
Key Features:

  * Username & Password Harvesting: Simulate common phishing scenarios to capture user credentials.
  * OTP Simulation: Not only does this tool harvest usernames and passwords, but it also supports OTP-based phishing attacks, simulating scenarios where users are asked to enter an OTP sent to their devices.
  * Realistic Phishing Pages: Mimics real-world login pages to deceive users into entering sensitive information.
  * Customizable: The tool allows for the customization of phishing pages, including text, URLs, and fields to make the attack look as real as possible.
  * Educational Tool: This tool is built for educational purposes only to demonstrate how phishing attacks work and how they can be prevented.
  * Security Awareness: By using this tool in a controlled, ethical environment, users and organizations can better understand the dangers of phishing and learn how to mitigate such attacks.

### TECHNIQUE
When a victim enters their credentials, you should access the original website and use those credentials to generate and send a legitimate OTP to the victim. Once the victim enters that OTP, you will also have it, giving you the ability to access the account before they do.

### SCREENSHOT 
<p align="center">
<img src="https://github.com/user-attachments/assets/aac1ae82-0001-4d76-a767-97817cddafab", width="500", height="500">
<img src="https://github.com/user-attachments/assets/3413e7ba-12f2-46f6-91b8-f9a703d0921c", width="500", height="500">
</p>


### INSTALLATION 
* git clone https://github.com/0xbitx/DEDSEC_PHISH.git
* cd DEDSEC_PHISH
* sudo pip3 install tabulate tqdm
* chmod +x dedsec_phish
* sudo ./dedsec_phish

### TESTED ON FOLLOWING
* Kali Linux 
* Parrot OS
* Ubuntu
  
## Support

If you find my work helpful and want to support me, consider making a donation. Your contribution will help me continue working on open-source projects.

**Bitcoin Address: `36ALguYpTgFF3RztL4h2uFb3cRMzQALAcm`**
                         

### DISCLAIMER
                                       TO BE USED FOR EDUCATIONAL PURPOSES ONLY

The use of the DEDSEC_PHISH is COMPLETE RESPONSIBILITY of the END-USER. Developers assume NO liability and are NOT responsible for any misuse or damage caused by this program. 
