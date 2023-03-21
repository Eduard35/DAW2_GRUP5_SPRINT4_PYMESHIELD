from kivy.lang import Builder
from kivymd.app import MDApp
from kivymd.uix.boxlayout import MDBoxLayout
from kivymd.theming import ThemableBehavior
from kivymd.uix.list import MDList, IconLeftWidget
from kivymd.uix.list import OneLineIconListItem
from kivy.uix.scrollview import ScrollView
from kivy.core.window import Window
from kivy.utils import platform
from kivymd.uix.screen import MDScreen
from kivy.properties import ObjectProperty
from kivymd.uix.scrollview import MDScrollView
from kivy.clock import Clock
from kivymd.uix.list import ThreeLineIconListItem
from kivy_garden.zbarcam import ZBarCam
from kivy.uix.button import Button
from kivymd.uix.dialog import MDDialog
from kivymd.uix.button import MDFlatButton
from kivy.uix.label import Label

import json
from kivy.uix.boxlayout import BoxLayout

from kivymd.uix.button import MDFloatingActionButton
from kivy.uix.camera import Camera


class ContentNavigationDrawer(MDBoxLayout):
    manager = ObjectProperty()
    nav_drawer = ObjectProperty()  

class DrawerList(ThemableBehavior, MDList):
    def set_color_item(self, instance_item):

        # Set the color of the icon and text for the menu item.
        for item in self.children:
            if item.text_color == self.theme_cls.primary_color:
                item.text_color = self.theme_cls.text_color
                break
        instance_item.text_color = self.theme_cls.primary_color
        

class MyLayout(MDScreen):
    def calc(self, instance):
        print(self.ids['qrlabel'].text)
        if (self.ids['qrlabel'].text != ''):
            MDDialog(
                text=self.ids['qrlabel'].text,
                buttons=[
                    MDFlatButton(
                        text="OK",
                        theme_text_color="Custom"
                    )
                ]
            ).open()
    def buscar(self,text):
        pass

class MyApp(MDApp):
    def build(self):
        self.title = "PymeShield"
        Window.size = (400, 600)

        return Builder.load_file("main2.kv")

    def on_start(self):
        scroll = ScrollView()
        
        # Leer los datos del archivo "inventory.json"
        with open("KivyMD-base/json/inventory.json") as f:
            inventory = json.load(f)

        # Crear el layout principal
        layout = BoxLayout()
        layout.add_widget(scroll)

        # Crear la lista y añadir los elementos
        self.list = layout

        for device in inventory:
            item = ThreeLineIconListItem(
                IconLeftWidget(
                    icon="laptop",
                ),
                text=f"Dispositiu: {device['id_inventory']}",
                secondary_text=f"Num Inv: {device['inventory_number']}",
                tertiary_text=f"ID Disp: {device['id_device']}"
            )

            self.root.ids.list.add_widget(item)

        # obtenir la pantalla inventari
        current_screen = self.root.ids.screen_manager.get_screen("Inventari")

        if current_screen:
            # agregar el botó flotant del QR
            camera_button = MDFloatingActionButton(
                icon="camera",
                pos_hint={"center_x": 0.9, "center_y": 0.1},
                on_release=self.open_camera
            )
        
        # agregar botó flotant
        current_screen.add_widget(camera_button)

        # retornem la llista de dispositius
        return layout

    def open_camera(self, *args):
        # obtenir la pantalla del qr
        current_screen = self.root.ids.screen_manager.get_screen("QR")
        # redireccionar a la pantalla qrW
        self.root.ids.screen_manager.current = "QR"
        # crea una instancia de la aamera
        

    def close_camera(self):
        # eliminar el widget de la cámara de la pantalla actual
        current_screen = self.root.ids.screen_manager.get_screen("QR")
        self.root.ids.zbarcam.ids['xcamera']._camera._device.release()
        current_screen.remove_widget(self.camera)        
        
MyApp().run()
