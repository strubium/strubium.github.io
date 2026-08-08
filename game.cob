       IDENTIFICATION DIVISION.
       PROGRAM-ID. GAME.

       DATA DIVISION.
       WORKING-STORAGE SECTION.

       01 WS-RET-CODE        PIC S9(9) COMP.
       01 WS-WINDOW-ID       PIC S9(9) COMP.
       01 WS-CLOSE-FLAG      PIC S9(9) COMP VALUE 0.

       PROCEDURE DIVISION.

       MAIN.

           DISPLAY "Starting COBOL GLFW Game".

           CALL "glfw_init_engine"
               RETURNING WS-RET-CODE.

           IF WS-RET-CODE NOT = 1
               DISPLAY "FAILED TO INIT GLFW"
               STOP RUN
           END-IF

           CALL "glfw_create_window"
               USING BY VALUE 800 600 "HEllO"
               RETURNING WS-WINDOW-ID.

           IF WS-WINDOW-ID < 0
               DISPLAY "FAILED TO CREATE WINDOW"
               STOP RUN
           END-IF

           CALL "glfw_make_context_current"
               USING BY VALUE WS-WINDOW-ID.

           MOVE 0 TO WS-CLOSE-FLAG.

           PERFORM MAIN-LOOP.

           CALL "glfw_destroy_window"
               USING BY VALUE WS-WINDOW-ID.

           CALL "glfw_terminate_engine".

           DISPLAY "Done".
           STOP RUN.


       MAIN-LOOP.

           PERFORM UNTIL WS-CLOSE-FLAG NOT = 0

               PERFORM RENDER-FRAME

           END-PERFORM.

           EXIT.


       RENDER-FRAME.

           CALL "glfw_poll_events".

           CALL "glfw_clear"
               USING BY VALUE 1.0 0.0 0.0 1.0.

           CALL "glfw_swap_buffers"
               USING BY VALUE WS-WINDOW-ID.

           CALL "glfw_window_should_close"
               USING BY VALUE WS-WINDOW-ID
               RETURNING WS-CLOSE-FLAG.

           EXIT.
