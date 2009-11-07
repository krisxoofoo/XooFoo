/* -- Console program compiled using LCC_win32                 */
/* -- Compile and test as console program                      */
/* -- When complete compile as Window app with no res          */
/* -- Runs as an hidden app.                                   */
/* -- unidelay.exe is run from a batch file to provide either  */
/* -- a 1 second delay (no parameters) or a multiple of 1      */
/* -- second (defined by parameter provided)                   */
/* -- e.g.  unidelay.exe 60   (Delay for 1 min)                */
/* - MPG 25-9-80                                               */

#include <stdheaders.h>
#include <windows.h>

int main(int argc,char *argv[])
{
  int delay;                          // Delay required
  int default_delay=1000;             // 1000ms gives 1s delay

  if (argc == 2){                     // If arg provided
    int seconds = (int)atoi(argv[1]); // Convert to int. Seconds required
    delay=seconds * default_delay;    // Calculate total delay
  }

  else {                              // Arg not provided
    delay=default_delay;              // Use default
  }

  sleep(delay);                       // Delay for specified time
  return 0;
}
