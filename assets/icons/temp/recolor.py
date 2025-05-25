import os
from PIL import Image

def recolor_white_to_green(image_path, output_path):
    image = Image.open(image_path).convert("RGBA")
    pixels = image.load()

    width, height = image.size
    for y in range(height):
        for x in range(width):
            r, g, b, a = pixels[x, y]
            if (r, g, b) == (255, 255, 255):  # White pixel
                pixels[x, y] = (116, 249, 0, a)  # Change to green

    image.save(output_path)

def process_directory(directory):
    for filename in os.listdir(directory):
        if filename.lower().endswith(".png"):
            input_path = os.path.join(directory, filename)
            base, ext = os.path.splitext(filename)
            output_filename = f"{base}-green{ext}"
            output_path = os.path.join(directory, output_filename)
            recolor_white_to_green(input_path, output_path)
            print(f"Saved: {output_filename}")

# Replace 'your_directory_path_here' with the actual path

if __name__ == "__main__":
    process_directory('./')
