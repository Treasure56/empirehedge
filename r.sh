#!/bin/bash

# Loop through each file in the current directory
for filename in *.html; do
  # Get the base filename without the extension
  base_filename="${filename%.*}"

  # Create the new filename with the .php extension
  new_filename="${base_filename}.php"

  # Rename the file using the mv command
  mv "$filename" "$new_filename"

  # Print a message to show which file was renamed (optional)
  echo "Renamed $filename to $new_filename"
done
