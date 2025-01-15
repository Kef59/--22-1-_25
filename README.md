import time

def traffic_light():
    while True:
        print("\033[91mКрасный свет\033[0m")  # Красный
        time.sleep(5)  # 5 секунд
        
        print("\033[93mЖелтый свет\033[0m")  # Желтый
        time.sleep(2)  # 2 секунды
        
        print("\033[92mЗеленый свет\033[0m")  # Зеленый
        time.sleep(5)  # 5 секунд
        
        print("\033[93mЖелтый свет\033[0m")  # Желтый
        time.sleep(2)  # 2 секунды

if __name__ == "__main__":
    try:
        traffic_light()
    except KeyboardInterrupt:
        print("\nСимуляция светофора остановлена.")
