   M S B A M L   `   `   `  ����L  HInterfacciaClient, Version=1.0.0.0, Culture=neutral, PublicKeyToken=null5clr-namespace:InterfacciaClientInterfacciaClient  5   	   "    InterfacciaClient.MainWindow   5   	   \ XPresentationFramework, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35R NWindowsBase, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35W SPresentationCore, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35D 9http://schemas.microsoft.com/winfx/2006/xaml/presentation    5   	   R NSystem.Xaml, Version=4.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089:x,http://schemas.microsoft.com/winfx/2006/xaml     5   	   @d2http://schemas.microsoft.com/expression/blend/2008     5   	   Jmc;http://schemas.openxmlformats.org/markup-compatibility/2006     5   	   1localclr-namespace:InterfacciaClient     5   	     � Title$  
MainWindow��5   	   $	��450��6   $	��800��6)   .��5	      � .+�5
   
   �� -   5         ��Name$ txtURL��5
      $
��Left=�6"   $��23��6=   $��	65,10,0,0q�6I    �� TextWrapping$
 Wrap=�6\   $	��Top=�6p   $	��606��6�   �� 5   
   $��source:��6   $
��Left=�6"   $��	10,10,0,0q�6=   $	��Top=�6P   $��50��6h   �� 5   
   -   5         ��Name$ btnLoad��5      $
��Load��6"   $
��Left=�61   $��
693,10,0,0q�6L   $	��Top=�6`   $��75��6x   $��23��6�   6�   �� 5   
   -   5        $ btnUltimiArrivi��5      $4��.quantità "ultimi arrivi" in reparto "fumetti"��6*   $
��Left=�6v   $	��Top=�6�   $	��335��6�   $��	10,66,0,0q�6�   6�   �� 5   
   $�� ��6   $
��Left=�6   $��
363,63,0,0q�66   $	��Top=�6J   $	��405��6b   �� 5   
   $
��Left=�6   $	��299��6-   $��363,110,0,0q�6:   $	��Top=�6O   $	��405��6g   �� 5   
   -   5        $ btnClear��5      $��Clear��6#   $
��Left=�63   $��270,389,0,0q�6N   $	��Top=�6c   $��75��6{   �� 5   
   -   5        $ btnScont��5      $'��!libri scontati in tutti i reparti��6#   $
��Left=�6O   $	��Top=�6j   $	��335��6�   $��
10,115,0,0q�6�   6�   �� 5   
   ���	#FFF4F4F5$
��Left=�6%   $	��100��6@   
���   �$	��Top=�6\   $	��335��6t   $��
10,154,0,0q�6�   �� 5   
   -   5        $ 	btnArchiv��5      $,��&Libri archiviati nel seguente periodo:��6$   $
��Left=�6U   $	��Top=�6p   $	��312��6�   $��
21,169,0,0q�6�   6�   �� 5   
   $
��Left=�6   $��23��6-   $
 Wrap=�69   $	��Top=�6M   $	��152��6e   $��181,214,0,0q�6q   �� 5   
   $
��Left=�6   $��23��6-   $
 Wrap=�69   $	��Top=�6M   $	��155��6e   $��
21,214,0,0q�6q   �� 5   
   $��Data inizio��6   $
��Left=�6&   $��
21,194,0,0q�6A   $	��Top=�6U   $	��155��6m   �� 5   
   $��
Data fine:��6   $
��Left=�6%   $��181,194,0,0q�6@   $	��Top=�6U   $	��152��6m   �� 5   
   ���	#FFF4F4F5$
��Left=�6%   $	��104��6@   
���   �$	��Top=�6\   $	��335��6t   $��
10,274,0,0q�6�   �� 5   
   $��Codice Carrello��6   $
��Left=�6*   $��
21,274,0,0q�6E   $	��Top=�6Y   $��27��6q   $	��113��6}   �� 5   
   $
��Left=�6   $��22��6-   $��
21,301,0,0q�69   $
 Wrap=�6M   $	��Top=�6a   $	��113��6y   �� 5   
   -   5        $ 
btnAcquist��5      $,��&elenco libri acquistati e numero copie��6%   $
��Left=�6V   $��
21,339,0,0q�6q   $	��Top=�6�   $	��312��6�   6�   �� 5   
   $!��Nome Utente corrispondente:��6   $
��Left=�66   $��139,275,0,0q�6Q   $	��Top=�6f   $	��194��6~   �� 5   
   $�� ��6   $
��Left=�6   $��139,297,0,0q�66   $	��Top=�6K   $	��194��6c   5      5       