
 When Uniform Server fails to start you need to determine an underlying cause.
 Diagnostics is all about gathering information hopefully pin pointing a cause
 and a possible solution.

 If the servers unexpectedly crash or fail to start no error logs are produced
 making diagnostics difficult. Added to this are system variations the cause
 of a failure may be hidden and the resulting error messages masking a real
 cause?

 -----------
 Diagnostics
 -----------

 This folder contains several batch files that are intended to isolate specific
 problem areas and gather as much information as possible to aid diagnostics.

 1) Always start with a fresh install of Uniform Server
 2) Before performing tests restart the PC this provides a know state.
 3) Tests should be run in the order specified. Starting with Test_1_port_check.txt

 ---------- 
 Forum Help
 ----------

 If you cannot resole an issue from the information gathered post on Uniform
 Servers’s forum.

 Please provide constructive inform, comments like “it does not work” reminds
 me of a crystal ball I took back to a shop because it did not function.

 My point we do not have a crystal ball hence we need to know the following
 information:

 1) What is the Windows operating system and version?
 2) What version of Uniform Server are you using?
 3) What error messages are produced?
 4) Have you checked the error log: UniServer\usr\local\apache2\logs\error.log
 5) Have you checked the error log: UniServer\usr\local\mysql\data\mysql.err

 Note: At step 3 you can capture text displayed in a command window (batch files)
       see file  Grab_screen_text.txt for details.
 
 Don’t be put off posting on the forum just supply as much information as
 possible. It’s a large and friendly community that is willing to help
 and resolve issues.

                               --- End ---



