from application import app
from flask_frozen import Freezer
import glob, os, shutil, time

def main():

    # Freeze the HTMl files
    freezer = Freezer(app)
    freezer.freeze()

    # Move it one directory up
    old_paths = glob.glob("build/*")

    for old_path in old_paths:
        
        assert( old_path[ : 6 ] == "build/" )

        new_path = f"{old_path[ 6 : ]}"

        if  ".html"  in new_path:

            new_path = new_path.replace( ".html", ".php" )

            if os.path.isfile(new_path):
                os.remove(new_path)
            
            shutil.move( old_path, new_path )

if __name__ == "__main__":
    main()